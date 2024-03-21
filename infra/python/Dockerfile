FROM python:3.10.12

WORKDIR /app

COPY requirements.txt ./

RUN apt-get update && apt-get install -y \
      python3-pip

RUN python3 -m pip install --upgrade pip
RUN python3 -m pip install fastapi uvicorn

COPY . .

EXPOSE 8001
CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8001"]