from flask import Flask, render_template, request, jsonify
# from flask_cors import CORS 
from chat import get_response
from flask_cors import CORS



app = Flask(__name__, static_folder='templates')

CORS(app)
#app.config['SERVER_NAME'] = 'localhost:3000'
# CORS(app)

# Comment out @app.get and index_get() if you are using CORS(app) for standalone frontend and uncomment all other commented lines
@app.get("/")
def index_get():
    return render_template("index.php")

@app.post("/predict")
def predict():
    text = request.get_json().get("message")
    
    response = get_response(text)
    message = {"answer": response}
    return jsonify(message)


if __name__ == "__main__":
    app.run(debug = True)
    