<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: "Tahoma", Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            padding: 20px;
            direction: rtl;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            max-width: 550px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #1e88e5;
            margin-bottom: 15px;
            text-align: center;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 15px;
            text-align: center;
        }
        .message {
            font-size: 16px;
            line-height: 1.8;
            text-align: center;
            margin-bottom: 20px;
        }
        .cta {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 12px 25px;
            background-color: #1e88e5;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
        }
        .footer {
            font-size: 13px;
            text-align: center;
            color: #777;
            margin-top: 25px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">مرحبًا بك في EventIQ!</div>

    <div class="greeting">أهلًا {{ $user->name }}،</div>

    <div class="message">
        <strong>EventIQ</strong>، منصتك المتكاملة لإدارة وتنظيم الأحداث بكل سهولة واحترافية.<br>
    </div>
    <div class="footer">
        فريق EventIQ<br>
        جميع الحقوق محفوظة ©
    </div>
</div>
</body>
</html>
