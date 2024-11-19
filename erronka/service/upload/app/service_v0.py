from flask import Flask, request, redirect, url_for, render_template_string, send_from_directory
import os

app = Flask(__name__)
UPLOAD_FOLDER = './uploads'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

FLAG_NIVEL1 = "CTF{nivel1_flag}"

# Ruta pública de la carpeta de uploads
@app.route('/uploads/<filename>')
def uploaded_file(filename):
    return send_from_directory(app.config['UPLOAD_FOLDER'], filename)

# Página de inicio
@app.route('/')
def index():
    return '''
    <h1>Upload File</h1>
    <form method="post" enctype="multipart/form-data" action="/upload">
        <input type="file" name="file" />
        <input type="submit" />
    </form>
    '''

# Endpoint de subida de archivos
@app.route('/upload', methods=['POST'])
def upload_file():
    if 'file' not in request.files:
        return 'No file part', 400
    file = request.files['file']
    if file.filename == '':
        return 'No selected file', 400
    file.save(os.path.join(app.config['UPLOAD_FOLDER'], file.filename))
    return redirect(url_for('uploaded_file', filename=file.filename))

# Flag del Nivel 2 en un archivo del sistema
# @app.route('/get_flag_nivel2')
# def get_flag_nivel2():
#     with open('./flags/flag_nivel2.txt', 'r') as f:
#         return f.read()

if __name__ == '__main__':
    os.makedirs(UPLOAD_FOLDER, exist_ok=True)
    app.run(host='0.0.0.0', port=5000)
