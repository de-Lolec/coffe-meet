from typing import Union

from fastapi import FastAPI
import requests


app = FastAPI()

x = requests.get('https://w3schools.com')

@app.get("/")
def read_root():
    return {"item_id": "ss"}


@app.get("/items/{item_id}")
def read_item(item_id: int, q: Union[str, None] = None):
    return {"item_id": item_id, "q": q}