<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point Coffee Links</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: rgba(2,132,70,255);
      color: white;
      text-align: center;
      padding: 50px;
    }

    .link-container {
      max-width: 500px;
      width: 100%;
      margin: auto;
    }

    .btn {
      display: block;
      padding: 15px 20px;
      color: #ffffff;
      text-decoration: none;
      border-radius: 10px;
      font-size: 1.2em;
      border: 2px solid #ffffff;
      transition: background-color 0.3s ease, color 0.3s ease;
      width: 100%;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #ffffff;
      color: rgba(2,132,70,255);
    }

    .butt {
      width: 32px;
      height: 32px;

      display: inline-block;
      margin-left: 8px;
      margin-right: 8px;
      transition: transform 0.3s ease;
    }

    .butt i {
      font-size: 32px;
      line-height: 32px;
      display: inline-block;
      text-align: center;
      color: white;
      transition: transform 0.15s ease;
    }

    .butt:hover i {
      transform: scale(1.15);
    }

    .d-flex {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
    }


    .content {
      width: 100%;
    }
    .point{
        display: block;
      padding: 15px 20px;

      text-decoration: none;
      border-radius: 50px;
      font-size: 1.2em;
      border: 2px solid rgba(255, 255, 255, 0.85);
      color: rgba(0, 0, 0, 0.85);
      background-color: rgba(255, 255, 255, 0.85);
      transition: background-color 0.3s ease, color 0.3s ease;
      width: 80%;
      font-size: 16px;
      transition: transform 0.15s ease;

    }

    .point:hover{
      border: 2px solid rgba(255, 255, 255, 1);
      color: rgba(0, 0, 0, 1);
      background-color: rgba(255, 255, 255, 1);
      transform: scale(1.05);
    }
    .container i{


      font-size: 20px;
      line-height: 20px;
      display: block;
      text-align: center;
      color: white;
      align-items: center;
      background-color: rgba(4, 35, 18, 0.5);
      padding: 9px 8.5px;
      border-radius: 50%;
      margin: auto;
      margin-top: 24px;
      transition: transform 0.5s ease;
    }
    .container :hover{
        background-color: rgba(4, 35, 18, 0.3);

    }


  </style>
</head>
<body>
    <nav class="navbar fixed-top justify-content-center">
        <div class=" container justify-content-center" >

            <i class="bc fa-regular fa-bell"></i>
            <i class=" bc fa-solid fa-ellipsis"></i>
        </div>

    </nav>


  <div class="link-container">
    <div>
        <img src="https://ugc.production.linktr.ee/jzqvdWwyT8OPge0PEh5S_a1fba08d25bd178fe4ec617576f379be?io=true&size=avatar-v3_0" alt="Point Coffee" class="img-fluid rounded-circle mb-4" width="100px" height="100px">
    </div>
    <div class="mb 4 fw-bold" style="font-size: 20px;">Point Coffee Indonesia</div>
    <div class="mb 4 fw-semibold" style="font-size: 16px;color:rgba(255, 255, 255, 0.85)";>Always On Point</div>

    <div class="justify-content-center" style="margin-top: 24px;">
        <a href="{{ route('UTS') }}">Lihat Web ETS</a>
        <a href="https://www.instagram.com/PointCoffeeID/" class="butt" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@pointcoffeeid" class="butt" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.facebook.com/pointcoffeeid" class="butt" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/PointCoffeeID" class="butt" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.threads.net/@pointcoffeeid" class="butt" target="_blank"><i class="fas fa-at"></i></a>
        <a href="https://www.youtube.com/@pointcoffeeid" class="butt" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://api.whatsapp.com/send?phone=628115484222" class="butt" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://outlook.office.com/mail/deeplink/compose/?mailtouri=mailto%3aCustomercare%40PointCoffee.id" class="butt" target="_blank"><i class="fas fa-envelope"></i></a>
    </div>

    <div class="d-flex flex-column align-items-center" style="margin-top: 18px;">
        <div class="content"><a href="https://pointcoffee.id/" target="_blank" class="btn">Website Point Coffee</a></div>
        <div class="content"><a href="https://www.google.com/maps/search/point+coffee/" target="_blank" class="btn">Cek Lokasi Point Coffee</a></div>
        <div class="content"><a href="https://food.klikindomaret.com/" target="_blank" class="btn">Order via KlikIndomaret</a></div>
        <div class="content"><a href="https://food.grab.com/id/id/?pid=FacebookAds&c=ID_GF_210821_FacebookAds_&is_retargeting=true&af_force_deeplink=true" target="_blank" class="btn">Order via Grab Food</a></div>
        <div class="content"><a href="https://shopee.co.id/now-food/storeListing/44543?stm_medium=referral&stm_source=https%3A%2F%2Flinktr.ee%2F-rw" target="_blank" class="btn">Order via Shopee Food</a></div>
        <div class="content"><a href="https://gofood.link/a/GEXFEfd#" target="_blank" class="btn">Order via GoFood</a></div>
        <div class="content"><a href="https://sticker.ly/" target="_blank" class="btn">WhatsApp (WA) Stickers Point Coffee</a></div>
    </div>
  </div>

  <div class="link-container d-flex flex-column align-items-center " style="margin-top: 40px;">
    <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=pointcoffeeid" class="point fw-bold text-center">
        bergabung dengan pointcoffeeid di Linktree

    </a>
  </div>

</body>
</html>
