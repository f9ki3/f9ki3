from flask import Flask, render_template, json, request, redirect
from model import *

with open('static/json/web_projects.json', 'r') as file:
    projects_data = json.load(file)

with open('static/json/console_projects.json', 'r') as file:
    console_data = json.load(file)

app = Flask(__name__)

#Views
@app.route('/')
def home():
    return render_template('index.html', projects_data=projects_data, console_data=console_data)

@app.route('/view_project')
def view_project():
    title = request.args.get('title')
    description = request.args.get('description')
    img1 = request.args.get('img1')
    img2 = request.args.get('img2')
    img3 = request.args.get('img3')
    img4 = request.args.get('img4')
    img5 = request.args.get('img5')
    
    return render_template('view_project.html', title=title, description=description, img1=img1, img2=img2, img3=img3, img4=img4, img5=img5)

@app.route('/view_console')
def view_console():
    title = request.args.get('title')
    description = request.args.get('description')
    img1 = request.args.get('img1')
    img2 = request.args.get('img2')
    img3 = request.args.get('img3')
    
    return render_template('view_console.html', title=title, description=description, img1=img1, img2=img2, img3=img3)

@app.route('/login')
def loginView():
    return render_template('login.html')

@app.route('/dashboard')
def dashboard():
    return render_template('dashboard.html')

@app.route('/login_account', methods=['POST'])
def loginAccount():
    #Handle request methods
    if request.method == 'POST':
        #get the uname and pass from the request
        username = request.form.get('uname')
        password = request.form.get('pass')
        
        if username == Accounts().username and password == Accounts().password:
            print(username)
            print(password)
            return redirect('/dashboard')
        else:
            return redirect('/')


if __name__ == '__main__':
    #  app.run()
    #app.run(host='0.0.0.0', port=5000)
    app.run(debug=True)