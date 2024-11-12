<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
      main{
        padding-top: 70px;
        background-image: url('{{asset('image/back_dash.png')}}');


      }

        .htext{
            padding: 200px 20px 20px 0px;
            margin: 0px 0px 0px 0px;
            color: #9c0746;
            font-weight: bold;

        }

        .second-row{
            padding-top: 250px;

        }
        .priceText{
            font-weight: bold;
            padding-top: 50px;

        }
        .model-show{
            z-index: 1050;
            
        }

      .modal-confirm {		
        color: #636363;
        width: 800px;
        margin: 30px auto;
        

        
        
      }
      .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
        background-color: #FDE5EA;
        width: 800px;
        height: 550px;
        

        background-image: url("{{ asset('image/model_back.png') }}") ;
        background-size: cover;
        background-position: center;
        
      }
      .modal-confirm .modal-header {
        border-bottom: none;   
        position: relative;
        
      }
      .modal-confirm h2 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
        color: #9c0746;
        font-weight: bold;
      }
      .h3_location{
        text-align: center;
        font-size: 20px;
        color: #9c0746;
        line-height: 1.8;
      }
      .modal-confirm h4 {
        text-align: center;
        font-size: 20px;
        margin: 60px 0 -10px;
        color: #9c0746;
        line-height: 1.8;
        
      }
      .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
        
      }
      .modal-confirm .modal-body {
        color: #9c0746;
      }
      .modal-confirm .modal-footer {
        border: none;
        text-align: center;		
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
       
      }
      .trigger-btn {
        display: inline-block;
        margin: auto;
      }
      a{
        color: #9c0746;
      }
          /* تنسيق الأيقونة وقائمة الخيارات */
      .user-icon {
          position: relative;
          display: inline-block;
          cursor: pointer;
          font-size: 24px;
          padding: 10px;
      }

      /* تنسيق القائمة المنسدلة */
      .dropdown-menu {
          display: none;
          position: absolute;
          top: 100%;
          left: 30px;
          background-color: #FDE5EA;
          box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
          border-radius: 5px;
          overflow: hidden;
          z-index: 1;
      }

      /* عرض القائمة عند مرور المؤشر */
      .user-icon:hover .dropdown-menu {
          display: block;
      }

      .dropdown-menu a {
          display: block;
          padding: 30px;
          text-decoration: none;
          color: #9c0746;
          transition: background-color 0.3s;
      }

      .dropdown-menu a:hover {
          background-color: #9c0746;
          color: #FDE5EA;
      }
      .desghi_text{
        color: #9c0746;
    }
    .main-container {
    min-height: 80vh;
    display: flex;
    flex-direction: column;
  
    }


      

  </style>

</head>

        <!-- Modal ingreduants HTML -->
        <div id="ingred" class="modal">
          <div class=" modal-confirm  " >
              <div class="modal-content">
                  <div class="modal-header justify-content-center">
                      <h2 class="modal-title">المكونات </h2>	
                      <button type="button" class="close" data-dismiss="modal" >&times;</button>
                  </div>
                  <div>
                      <h4>“في Cookery Bakery، نعتز بتقديم مجموعة متنوعة من الحلويات الصحية المصنوعة بحب وشغف. نعتمد على مكونات طبيعية وعضوية لنقدم لكم ألذ أنواع الكوكيز، التشيز كيك، والكيك الصحي، مصممة بعناية لتلبي احتياجاتكم الغذائية دون التنازل عن الطعم الرائع.
                      </h4>
                      <h4>
                          نستخدم المحليات الطبيعية، والمكسرات، والزيوت النباتية الصحية، مع خيارات خالية من الغلوتين والألبان، لتناسب جميع الأذواق وتدعم نمط حياة صحي. تصفحوا موقعنا لطلب منتجاتكم المفضلة، واستمتعوا بحلويات Cookery Bakery الطازجة والشهية  .”
                      </h4>
                  </div>
                  <div class="modal-footer">
                  </div>
              </div>
          </div>
      </div>

              <!-- Modal delivary HTML -->
              <div id="delivary" class="modal">
                  <div class=" modal-confirm " >
                      <div class="modal-content">
                          <div class="modal-header justify-content-center">
                              <h2 class="modal-title">التوصيل </h2>	
                              <button type="button" class="close" data-dismiss="modal" >&times;</button>
                          </div>
                          <div>
                              <img class="pt-5"src="{{ asset('image/delivery.png') }}">
                          </div>
                          <div class="modal-footer">
                          </div>
                      </div>
                  </div>
              </div>

          <!-- Modal locations HTML -->
      <div id="locations" class="modal">
          <div class=" modal-confirm " >
              <div class="modal-content">
                  <div class="modal-header justify-content-center">
                      <h2 class="modal-title">الفروع و اوقات العمل </h2>	
                      <button type="button" class="close" data-dismiss="modal" >&times;</button>
                  </div>
                  <div>
                      <h3 class="h3_location pt-3"style="font-weight: bold">تجدوننا في :</h3>
                      <h3 class="h3_location"style="font-weight: bold">فرع الرياض - التحلية</h3>
                          <h3 class="h3_location">شارع التحلية، بالقرب من مجمع التحلية التجاري.<br>
                              ساعات العمل: من 9 صباحًا حتى 11 مساءً.
                              </h3>
                      <h3 class="h3_location"style="font-weight: bolder">فرع جدة - حي الروضة</h3>
                          <h3 class="h3_location" >شارع الأمير سلطان، مقابل مركز الروضة بلازا.
                              <br>ساعات العمل: من 10 صباحًا حتى 12 منتصف الليل.
                              </h3>
                      <h3 class="h3_location" style="font-weight: bolder">فرع الخبر - الكورنيش</h3>
                          <h3 class="h3_location" >شارع الكورنيش، بالقرب من مجمع الراشد.
                              <br>ساعات العمل: من 8 صباحًا حتى 11 مساءً.
                              </h3>
                  </div>
                  <div class="modal-footer">
                  </div>
              </div>
          </div>
      </div>
                      <!-- Modal how we HTML -->
  <div id="myModal" class="modal">
      <div class=" modal-confirm " >
          <div class="modal-content">
              <div class="modal-header justify-content-center">
                  <h2 class="modal-title">من نحن</h2>	
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
              </div>
              <div>
                  <h4>.نحن مخبز متخصص في تقديم أشهى الحلويات الصحية بعناية وابتكار
                      نقدم لكم مجموعة فريدة من <br>"الكوكيز، تشيز كيك، والكيك"<br> المصنوعة من أفضل المكونات الطبيعية، لتستمتعوا بالطعم الغني دون الشعور بالذنب. نؤمن بأن الحلويات يمكن أن تكون لذيذة وصحية في آنٍ واحد، ولذلك نسعى دائماً لتوفير خيارات تلبي احتياجات عملائنا الصحية وتناسب أسلوب حياتهم. عبر موقعنا الإلكتروني، يمكنكم استعراض وشراء منتجاتنا بسهولة، ليصلكم الطعم الرائع إلى باب منزلكم.</h4>
              </div>
              <div class="modal-footer">
              </div>
          </div>
      </div>
</div>


<body class="body-container" dir="rtl">
  <div id="app">
    <header class="header header-link ">
        
      <a harf="#" class="logo"><img src="{{ asset('image/cookery_bakery.png') }}" width="100px" height="50px"></i></a>
      <nav class='navbar navbar-link'>
          <a class="a-link" href="{{route('index')}}">الرئيسية</a>
          <a class="a-link" href="#myModal" class="trigger-btn" data-toggle="modal">من نحن </a>
          <a class="a-link" href="#ingred" class="trigger-btn" data-toggle="modal">المكونات</a>
          <a class="a-link" href="#delivary" class="trigger-btn" data-toggle="modal">التوصيل</a>
          <a class="a-link" href="#locations"class="trigger-btn" data-toggle="modal">الفروع و اوقات العمل</a>
      </nav>
      <div class="" >
          
          <!-- <a class="a-link" harf="#"><i class="bi bi-person p-2 m-5 icon-size"></i> -->
              <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">تسجيل  جديد</a>
                          </li>
                          
                      @endif


                  @else
                      <li class="nav-item dropdown pl-5">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end  " aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('dashboard') }}"> لوحة التحكم </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  تسجيل الخروج
                              </a>
                              


                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>


      </div>
      
    </header>
    
    <main class="main-container">
      <div class="row">
          <div class="col col-sm-3">
              <div class="wrapper d-flex align-items-stretch">
                  <nav id="sidebar" class="order-last">
                      <div class="custom-menu">
                          <!-- هنا يمكن إضافة عناصر مخصصة إذا لزم الأمر -->
                      </div>
  
                      <div>
                          <ul class="list-unstyled components mb-5">
                              <li class="active">
                                  <a href="{{ route('index') }}">
                                      <i class="bi bi-house-door-fill p-2 icon-size"></i> الصفحة الرئيسية
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('products') }}">
                                      <i class="fs-4 bi-table p-2 icon-size"></i> المنتجات
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('showdet') }}">
                                      <i class="bi bi-card-list p-2 icon-size"></i> تفاصيل المنتجات
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="bi bi-receipt p-2 icon-size"></i> الفاتورة
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="bi bi-people p-2 icon-size"></i> العملاء
                                  </a>
                              </li>
                          </ul>
  
                          <div class="mb-5 px-4">
                              <h3 class="h6 mb-3"></h3>
                              <!-- هنا يمكن إضافة محتوى إضافي إذا لزم الأمر -->
                          </div>
  
                          <div class="footer px-4">
                              <!-- هنا يمكن إضافة محتوى footer إذا لزم الأمر -->
                          </div>
                      </div>
                  </nav>
              </div>
          </div>

          
  
          <div class="col-sm-8">
            
              @yield('content')
          </div>
      </div>
    </main>
  
		




		
    
    <script src="{{ asset('js/main.js') }}"></script>
   <!-- <script src="{{ asset('js/jquery.min.js') }}"></script>  -->

</body>
</html>
