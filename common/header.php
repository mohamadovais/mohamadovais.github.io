<?php include 'common/connection.php';
$sql ="SELECT * FROM `form_web` where id ='1'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        while($data = mysqli_fetch_assoc($fire)){
            $title=$data['title'];
            $old_logo=$data['logo'];
            $old_logo_light=$data['logo_light'];
            $old_upload_favicon=$data['upload_favicon'];
            $keyword=$data['keyword'];
            $description=$data['description'];
            $phone=$data['phone'];
            $email=$data['email'];
            $address=$data['address'];
            $facebook_link=$data['facebook_link'];
            $instagram_link=$data['instagram_link'];
            $youtube_link=$data['youtube_link'];
        }
    }
    $sql2 ="SELECT * FROM `slider` where id ='1'";
    $fire2 = mysqli_query($con,$sql2);
    if(mysqli_num_rows($fire2)>0){
        while($data2 = mysqli_fetch_assoc($fire2)){
          $slider_main_heading = $data2['main_heading'];
          $slider_discription = $data2['discription'];
          $slider_banner_img = $data2['banner_img'];
          $slider_cv_upload = $data2['cv_upload'];

        }
    }
    $sql3 ="SELECT * FROM `about_us` where id ='1'";
    $fire3 = mysqli_query($con,$sql3);
    if(mysqli_num_rows($fire3)>0){
        while($data3 = mysqli_fetch_assoc($fire3)){
          $about_us_heading = $data3['heading'];
          $about_us_main_heading = $data3['main_heading'];
          $about_us_icon_one_img = $data3['icon_one_img'];
          $about_us_heading_one = $data3['heading_one'];
          $about_us_discription_one = $data3['discription_one'];
          $about_us_icon_two_img = $data3['icon_two_img'];
          $about_us_heading_two = $data3['heading_two'];
          $about_us_discription_two = $data3['discription_two'];
          $about_us_user_img=$data3['user_img'];
          $about_us_experience_year = $data3['experience_year'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from zyan.vercel.app/index_2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 08:44:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" >
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi"
  >
    <title><?php echo $title;?></title>
    <link rel="icon" type="image/png" href="admin/<?php echo $old_upload_favicon;?>" >
    <link rel="stylesheet" href="css/font-awesome-pro.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/scroll_button.css" >
    <link rel="stylesheet" href="css/spacing.css" >
    <link rel="stylesheet" href="css/plugin.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/responsive.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>

  <body class="home_2">
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <h5 class="preloader-text">Loading</h5>
    </div>
    <!--================================
        PRELOADER END
    =================================-->

    <!--================================
        SCROLL BUTTON END
    =================================-->
    <nav class="main_menu_2">
      <span class="menu_2_icon">
        <i class="fa-light fa-bars bar_icon-staggered bar_icon"></i>
        <i class="fa-light fa-xmark close_icon"></i>
      </span>

      <a class="logo_2 p-0" href="index_2.php">
        <img src="admin/<?php echo $old_logo;?>" alt="OVAIS" class="img-fluid w-100">
      </a>

      <ul id="list-example" class="list-group">
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#banner"
          >
            <span
              ><img
                src="svg/home-2.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span
            >Home
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#about"
          >
            <span
              ><img
                src="svg/clipboard.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span
            >About Me
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#service"
          >
            <span
              ><img
                src="svg/briefcase.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span>
            Service
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#skills"
          >
            <span
              ><img src="svg/path.svg" alt="icon" class="img-fluid w-100 svg"></span>
            skills
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#portfolio"
          >
            <span
              ><img
                src="svg/messages-1.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span>
            portfolio
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#blog"
          >
            <span
              ><img
                src="svg/quote-down-square.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span>
            blog
          </a>
        </li>
        <li>
          <a
            class="list-group-item list-group-item-action text_hover_animaiton"
            href="#contact"
          >
            <span
              ><img
                src="svg/user-square.svg"
                alt="icon"
                class="img-fluid w-100 svg"></span>
            Contact
          </a>
        </li>
      </ul>
    </nav>