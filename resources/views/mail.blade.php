<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div class="ticket"
        style="display: flex; justify-content: center; align-items: center; width: 700px; margin: 20px auto; border: 1px solid;">
        <div class="stub"
            style="background: #e51b24; height: 250px; width: 250px; color: white; padding: 20px; position: relative;">
            <img class="qrcode" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=31415926"
                style="width: 120px; top: 55px; right: 15px; position: relative;">

            <div class="top" style="display: flex; align-items: center; height: 40px; text-transform: uppercase;">
                <span class="line"
                    style="display: block; background: #000; height: 40px; width: 3px; margin: 0 20px;"></span>
                <span class="num" style="font-size: 10px;">
                    <span style="color: #000;"></span>
                </span>
            </div>
            <div class="invite" style="position: absolute; left: 100px; bottom: 45px; color: #000; width: 20%;">
                <span
                    style="content: ''; background: #fff; display: block; width: 40px; height: 3px; margin-bottom: 5px;"></span>
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="check" style="background: #fff; height: 250px; width: 450px; padding: 40px; position: relative;">
            <div class="big" style="font-size: 50px; font-weight: 900; line-height: .8em;">
                You're <br> Invited <br> standard
            </div>
            <div class="number" style="position: absolute; top: 50px; right: 50px; color: #e51b24; font-size: 40px;">#1
            </div>
            <div class="info"
                style="display: flex; justify-content: flex-start; font-size: 12px; margin-top: 20px; width: 100%;">
                <section style="margin-right: 50px;">
                    <span
                        style="content: ''; background: #ef5658; display: block; width: 40px; height: 3px; margin-bottom: 5px;"></span>
                    <div class="title" style="font-size: 10px; text-transform: uppercase;">Date:</div>
                    <div>4/27/2019</div>
                </section>
                <section style="margin-right: 50px;">
                    <span
                        style="content: ''; background: #ef5658; display: block; width: 40px; height: 3px; margin-bottom: 5px;"></span>
                    <div class="title" style="font-size: 10px; text-transform: uppercase;">Issued By:</div>
                    <div>Integrative Nutrition</div>
                </section>
                <section>
                    <span
                        style="content: ''; background: #ef5658; display: block; width: 40px; height: 3px; margin-bottom: 5px;"></span>
                    <div class="title" style="font-size: 10px; text-transform: uppercase;">Invite Number:</div>
                    <div>31415926</div>
                </section>
            </div>
        </div>
    </div>

</body>

</html>
