from flask import Flask, render_template, json, request

with open('static/json/web_projects.json', 'r') as file:
    projects_data = json.load(file)

with open('static/json/console_projects.json', 'r') as file:
    console_data = json.load(file)

app = Flask(__name__)

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


if __name__ == '__main__':
     app.run()
    # app.run(host='0.0.0.0', port=5000)