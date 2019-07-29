# สำคัญมาก Webhook จำเป็นต้องมี Https (ในกรณีทดสอบบนคอมพิวเตอร์ส่วนตัว แนะนำให้ใช้ Ngrok เพื่อให้ได้ https มาใช้งาน)

> รายละเอียดเพิ่มเติม ngrok https://medium.com/@Krucamper/%E0%B8%9A%E0%B8%A7%E0%B8%81%E0%B8%AA%E0%B8%81%E0%B8%B4%E0%B8%A5-developer-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-ngrok-674ea172ccaa
---------------------------------------------------------------------

# รายละเอียด Webhook แต่ละ Lab

> lab 1 ดัก Request ที่ได้จาก Dialogflow Fulfillment Webhook และเก็บค่าลงในไฟล์ txt

> lab 2 ตอบกลับข้อความไปยัง Dialogflow

> lab 3 ตอบกลับข้อความตาม Action ที่ส่งมาจาก Dialogflow Fulfillment Webhook

> lab 4-5 ทดลองตอบกลับข้อความโดยดึงข่าวจาก RSS 

> lab 6 ตอบกลับข้อความโดยใช้ Custom payload (รองรับข้อความพิเศษชนิดต่างๆจาก LINE)

> lab 7 เก็บ log โดยใช้ uid (Unique ID จาก LINE) และ ข้อความที่ผู้ใช้ส่งมาหาบอทลงในไฟล์ txt

> lab 8 Webhook ติดต่อฐานข้อมูล (mySql) และ ทำการเก็บ Log ลงในฐานข้อมูล
