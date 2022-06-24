@extends("layout.header")
@section("title","resources")
@section ("css")

<style>
  body{
    font-family: 'Poppins', sans-serif;
}


/* underline gradient portion */

.under_line {
    width: 263px;
    height: 9px;
    /* background: linear-gradient(180deg, rgba(121,47,164,1) 9%, rgba(226,10,83,1) 100%); */
    background: linear-gradient(90deg, rgba(106,52,175,1) 18%, rgba(255,0,61,1) 77%);
    display: inline-block;
    margin-right: 20px;
    border-radius: 10px;
}

.small_underline{
    width: 50px;
    height: 9px;
    /* background: linear-gradient(180deg, rgba(121,47,164,1) 9%, rgba(226,10,83,1) 100%); */
    background: linear-gradient(90deg, rgba(106,52,175,1) 18%, rgba(255,0,61,1) 77%);
    border-radius: 10px;
   
}
.HEADING{
    font-family: 'Yantramanav', sans-serif;
}


.HEADING{

letter-spacing: 1.5px;
}

p{
    margin-bottom: 12px;
    font-size: 15px;
}

.content{
    width: 59%;
}
/* 
/* image section  */
/* .Img_php{
    width: 70%;
    margin: auto;
    margin-top: 80px;
}
.text h4{
    color: #918d8d;
}
.Img_php img{
   

    
  
        margin-top: 50px;
        object-fit: contain;
        object-position: center;
        width: 100%;
}
.ios_developer{
    margin-top: 31px;
}
.node img{
    height: 135px;
}
.ios_text{
    margin-top: 76px !important;
}
.img_container{
    width: 300px;
    height: 300px;
}

.img_container {
    width: 235px;
    height: 204px; */
 */
 .HEADING H1{
    font-size: 3rem !important;
    font-weight: 700 !important;
}
.parent_container1{
    width: 100%;
  
}
.butt{
    background: linear-gradient(90deg, rgba(106,52,175,1) 8%, rgba(255,0,61,1) 96%);
}
.img_container {
    width: 225px;
    height: 308px;
    /* background-color: rgb(3, 204, 204);
    border: 1px solid red; */
}

.text_container {
    width: 360px;
    height: 80px;
    /* background-color: bisque; */
    color: rgb(105, 103, 103);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 34px;
    margin-top: -34px;}

    
.text_container p{
    font-size: 25px;
    font-weight: 600;
text-align: center;}

    
    .img_container img {
        width: 100%;
        object-fit: scale-down;
        object-position: center;
    }

    .parent_container1{
        margin-top: 19px;
    }
   
    .bd {
        border-right: solid#d58dbc;
    }
    .find-java-spring-h3{
        font-weight: bold; 
        background: linear-gradient(#6A34AF , #EF264F);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;   
        
    }

    


      @media (max-width:767px) {

        .bd
        {
          border:0px solid !important
          }
  
  
        }

        @media (max-width:767px) {

            .row
            {
              border:0px solid !important
              }
      
      
            }


            @media (max-width:767px) {

                .HEADING
                {
                  width: 100%;
                  align-items: center;  
                text-align: center;      
                background: linear-gradient(#6A34AF , #EF264F);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;          }
          
          
                }
                @media (max-width:767px) {

                    .content
                    {
                        text-align: center;
                       padding-right: 15px;
                      width: 100%;
                      font-size: 18px;
                      background: linear-gradient(#6A34AF , #EF264F);
                      -webkit-text-fill-color: transparent;
                      -webkit-background-clip: text;
                      
                                       }
                                           
                                           }                     
              
                    
                    @media (max-width:767px) {

                        .under_line
                        {
                            display: none;               }
                  
                  
                        }


                        @media (max-width:767px) {

                            .small_underline
                            {
                                display: none;               }
                      
                      
                            }
                   
                            @media (max-width:767px) {

                              body
                                {
                                    background-color: rgba(194, 181, 166, 0.068);              }
                          
                          
                                }
                       


                    
                
      </style>


@endsection

@section("content")

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter:wght@300;400;500&family=Lexend:wght@300&family=Poppins:wght@200&family=Raleway:wght@300&family=Secular+One&family=Varela+Round&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="resourcedeployment.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Yantramanav:wght@400;500&display=swap"
    rel="stylesheet">
  <title>Resource Deployment</title>
</head>

<body>

  <div class="container my-5">
    <div class="row">
      <div class="HEADING mt-5 px-0">
        <H1 style="font-size: 3rem !important;

        font-weight: 700 !important;">RESOURCE DEPLOYMENT</H1>
      </div>
      <div class="under_line"></div>
      <div class="small_underline"></div>
    </div>
    <div class="row">
      <div class="content my-5 px-0">
        <p> We have got developers!</p>

        <p>Hire our in house developers for all your technological support at pocket friendly rates!
          We have top skilled, on demand developers for all your IT needs –
      </div>
      </p>
    </div>
    <!-- new section1 -->
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd">
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/PHP-logo 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>PHP Developer</p>
          </div>
        </div>
         


      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/1280px-Node.js_logo 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Node JS</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/1280px-Apple_Developer_brandmark 1.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>IOs Developer</p>
        </div>
      </div></div>

    </div>
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd" >
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Java-Logo 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Java Developer</p>
          </div>
        </div>
        


      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/fullstacklogo1-1 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Full Stack</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/becomeamernstackdeveloper-mobile-300x279 1.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>MERN Stack Developer</p>
        </div>
      </div></div>

    </div>
    <!-- third section  -->
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd">
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/xamarin-282427 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Xamarin Developer</p>
          </div>
        </div>
        
    

      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/g10.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Angular JS Developer</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/React 1.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>React JS Developer</p>
        </div>
      </div></div>

    </div>
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd">
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/android-developers 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Android Developer</p>
          </div>
        </div>
        
    

      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Mean+Stack 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>MEAN Stack Developer</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/1184px-Vue.js_Logo_2 1.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>Vue JS</p>
        </div>
      </div></div>

    </div>
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd">
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/1024px-Python-logo-notext 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Python Developer</p>
          </div>
        </div>
        
    

      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/png-clipart-net-framework-software-framework-programmer-computing-platform-microsoft-corporation-7s-framework-example-blue-text 1.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>.NET Developer</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Rectangle 87.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>UI/UX Developer</p>
        </div>
      </div></div>

    </div>
    <div class="row" style="border-bottom: solid#d58dbc">
      <div class="col-sm-4 bd">
        
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Group.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Business Analyst</p>
          </div>
        </div>
        
    

      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Group 133.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Automation Testing Engineer</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4"><div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
        <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Union.png" alt=""></div>
        <div class="text_container d-flex justify-content-center align-items-center">
          <p>DBA</p>
        </div>
      </div></div>

    </div>
    <div class="row mb-5" >
      <div class="col-sm-4 bd">
        
        
        
    

      </div>
      <div class="col-sm-4 bd">
        <div class="parent_container1 d-flex justify-content-center align-items-center flex-column">
          <div class="img_container d-flex justify-content-center align-items-center"><img src="img/Vector.png" alt=""></div>
          <div class="text_container d-flex justify-content-center align-items-center">
            <p>Manual test Engineer</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        
      </div>

    </div>
           <div class="row">
            <div class="texxts text-center my-5"><h3 class="find-java-spring-h3">Find the Java Spring Boot Developers According To Your Need</h3></div>
     <form action="" name="form" id="form1">
      <div class="row my-3">
        <div class="col-sm-6">  <input type="text" placeholder="Name" class="form-control col-sm-6"></div>
        <div class="col-sm-6"><input type="text" placeholder="phone no." class="form-control col-sm-6"></div>
      </div>
     
                
        <div class="row">
          <input type="email" placeholder="email"class="form-control mx-2 my-3 col-sm-6" >
 <textarea name="text" id="text" cols="136" rows="10" placeholder="Project Description" class=" mx-2"></textarea>
        </div>          
 

 <button class="my-5 butt" style="width: 100%; border-radius: 50px ;" >submit</button>


     </form>
           </div>







  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>
@endsection
