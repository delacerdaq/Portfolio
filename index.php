<?php

  if(isset($_POST['submit'])){
    // print_r($_POST['name']);
    // print_r('<br>');
    // print_r($_POST['phone']);
    // print_r('<br>');
    // print_r($_POST['email']);
    // print_r('<br>');
    // print_r($_POST['subject']);
    // print_r('<br>');
    // // print_r($_POST['message']);

    include_once('config.php');

    $name = ($_POST['name']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);
    $subject = ($_POST['subject']);
    $message = ($_POST['message']);

    $result = mysqli_query($conexao, "INSERT INTO requests(user_name, phone, email, subj, msg) 
    VALUES ('$name', '$phone', '$email', '$subject', '$message')");
  }

?>

<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./icon/logo.ico" type="image/x-icon">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <header>
        <a class="smooth-scroll" href="#container_back_1"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="52" viewBox="0 0 60 52" fill="none">
            <g clip-path="url(#clip0_15_180)">
              <path d="M30.1262 26.3459C29.9462 26.3459 29.7662 26.2295 29.6461 26.0552C29.4662 25.8228 29.5863 25.4738 29.8261 25.2994L37.8061 20.8237L30.0663 16.5223L21.4865 21.2888C21.2467 21.4631 20.8863 21.3468 20.7064 21.1144C20.5264 20.8821 20.6465 20.533 20.8863 20.3587L29.7064 15.4179C29.8863 15.3015 30.0663 15.3015 30.2463 15.4179L39.0663 20.3587C39.2463 20.475 39.3664 20.6494 39.3664 20.8237C39.3664 20.9981 39.2463 21.1724 39.0663 21.2888L30.3659 26.2879C30.3061 26.3459 30.186 26.3459 30.1262 26.3459Z" fill="white"/>
              <path d="M30.1262 36.2852L20.7059 31.0542V20.8819C20.7059 20.5912 20.9458 20.3588 21.2458 20.3588C21.5459 20.3588 21.7857 20.5912 21.7857 20.8819L21.7862 30.4144L30.0663 35.0645L38.3464 30.4144L38.346 20.8819C38.346 20.5912 38.5858 20.3588 38.8859 20.3588C39.186 20.3588 39.4258 20.5912 39.4258 20.8819V31.0537L30.1262 36.2852Z" fill="white"/>
              <path d="M30.1261 32.914C29.8261 32.914 29.5862 32.6817 29.5862 32.391L29.5858 25.8227C29.5858 25.532 29.8256 25.2997 30.1257 25.2997C30.4258 25.2997 30.6656 25.532 30.6656 25.8227V32.391C30.666 32.6813 30.4258 32.914 30.1261 32.914Z" fill="white"/>
              <path d="M49.2664 24.079C49.0864 24.079 48.9064 23.9626 48.7862 23.7883L41.6465 11.8145C41.4665 11.5822 41.5866 11.2331 41.8265 11.0588C42.0664 10.8844 42.4264 11.0008 42.6064 11.2331L49.7465 23.2069C49.9265 23.4392 49.8064 23.7883 49.5665 23.9627C49.5063 24.079 49.3861 24.079 49.2664 24.079Z" fill="white"/>
              <path d="M23.2261 9.43233C22.9261 9.43233 22.6862 9.1998 22.6862 8.90886C22.6862 8.61792 22.9261 8.38538 23.2261 8.38538H36.7862C37.0863 8.38538 37.3261 8.61792 37.3261 8.90886C37.3265 9.1998 37.0863 9.43233 36.7263 9.43233H23.2261Z" fill="white"/>
              <path d="M11.2861 23.8465C11.166 23.8465 11.1061 23.8465 10.986 23.7885C10.7462 23.6142 10.6261 23.3235 10.806 23.0328L17.7661 11.4077C17.9461 11.1754 18.2462 11.059 18.5463 11.2334C18.7861 11.4077 18.9062 11.6985 18.7263 11.9892L11.7657 23.556C11.7059 23.7304 11.5259 23.8465 11.2861 23.8465Z" fill="white"/>
              <path d="M18.2461 41.284C18.0662 41.284 17.8862 41.1676 17.7661 40.9932L10.8064 29.3683C10.6264 29.136 10.7465 28.7869 10.9864 28.6125C11.2262 28.4382 11.5865 28.5545 11.7665 28.7869L18.7266 40.4701C18.9066 40.7025 18.7865 41.0516 18.5467 41.2256C18.4261 41.284 18.3064 41.284 18.2461 41.284Z" fill="white"/>
              <path d="M37.0262 44.075H23.2261C22.9261 44.075 22.6862 43.8424 22.6862 43.5514C22.6862 43.2604 22.9261 43.0278 23.2261 43.0278H37.0262C37.3263 43.0278 37.5661 43.2604 37.5661 43.5514C37.5661 43.8421 37.3263 44.075 37.0262 44.075Z" fill="white"/>
              <path d="M42.1262 41.4004C42.0061 41.4004 41.9462 41.4004 41.8261 41.3424C41.5862 41.168 41.4661 40.8772 41.6461 40.5865L48.6661 28.7871C48.8461 28.5548 49.1462 28.4384 49.4464 28.6128C49.6862 28.7871 49.806 29.0779 49.6264 29.3685L42.606 41.1096C42.5461 41.2844 42.3661 41.4004 42.1262 41.4004Z" fill="white"/>
              <path d="M19.8662 12.6283C17.7062 12.6283 16.0261 10.9429 16.0261 8.90832C16.0261 6.81579 17.7659 5.18829 19.8662 5.18829C22.0261 5.18829 23.7061 6.87371 23.7061 8.90832C23.766 10.9429 22.0261 12.6283 19.8662 12.6283ZM19.8662 6.23432C18.3662 6.23432 17.1059 7.45517 17.1059 8.90832C17.1059 10.3614 18.3662 11.5823 19.8662 11.5823C21.3661 11.5823 22.6264 10.3614 22.6264 8.90832C22.6264 7.39717 21.426 6.23432 19.8662 6.23432Z" fill="white"/>
              <path d="M40.3262 12.6283C38.1662 12.6283 36.4861 10.9429 36.4861 8.90832C36.4861 6.81579 38.226 5.18829 40.3262 5.18829C42.4863 5.18829 44.1662 6.87371 44.1662 8.90832C44.1662 10.9429 42.4863 12.6283 40.3262 12.6283ZM40.3262 6.23432C38.8261 6.23432 37.566 7.45517 37.566 8.90832C37.566 10.3614 38.8261 11.5823 40.3262 11.5823C41.8261 11.5823 43.0866 10.3614 43.0866 8.90832C43.0858 7.39717 41.8261 6.23432 40.3262 6.23432Z" fill="white"/>
              <path d="M19.8662 47.2711C17.7062 47.2711 16.0261 45.5857 16.0261 43.551C16.0261 41.4584 17.7659 39.8309 19.8662 39.8309C22.0261 39.8309 23.7061 41.5164 23.7061 43.551C23.766 45.5853 22.0261 47.2711 19.8662 47.2711ZM19.8662 40.8769C18.3662 40.8769 17.1663 42.098 17.1663 43.551C17.1663 45.0041 18.4265 46.2248 19.9265 46.2248C21.4265 46.2248 22.6867 45.0041 22.6867 43.551C22.6264 42.098 21.4259 40.8769 19.8662 40.8769Z" fill="white"/>
              <path d="M40.3262 47.2711C38.1662 47.2711 36.4861 45.5857 36.4861 43.551C36.4861 41.4584 38.226 39.8309 40.3262 39.8309C42.4863 39.8309 44.1662 41.5164 44.1662 43.551C44.1662 45.5853 42.4863 47.2711 40.3262 47.2711ZM40.3262 40.8769C38.8261 40.8769 37.566 42.098 37.566 43.551C37.566 45.0041 38.8261 46.2248 40.3262 46.2248C41.8261 46.2248 43.0866 45.0041 43.0866 43.551C43.0858 42.098 41.8261 40.8769 40.3262 40.8769Z" fill="white"/>
              <path d="M50.8861 30.0659C48.7264 30.0659 47.046 28.3805 47.046 26.3459C47.046 24.2534 48.7858 22.6259 50.8861 22.6259C53.0462 22.6259 54.7262 24.3113 54.7262 26.3459C54.7262 28.4384 52.9863 30.0659 50.8861 30.0659ZM50.8861 23.6719C49.3861 23.6719 48.1261 24.8928 48.1261 26.3459C48.1261 27.799 49.3861 29.0198 50.8861 29.0198C52.386 29.0198 53.6465 27.799 53.6465 26.3459C53.6465 24.8928 52.386 23.6719 50.8861 23.6719Z" fill="white"/>
              <path d="M9.54614 30.0659C7.38611 30.0659 5.70612 28.3805 5.70612 26.3459C5.70612 24.2534 7.4459 22.6259 9.54614 22.6259C11.7061 22.6259 13.3861 24.3113 13.3861 26.3459C13.446 28.4384 11.7061 30.0659 9.54614 30.0659ZM9.54614 23.6719C8.04612 23.6719 6.78589 24.8928 6.78589 26.3459C6.78589 27.799 8.04612 29.0198 9.54614 29.0198C11.0461 29.0198 12.3064 27.799 12.3064 26.3459C12.3064 24.8928 11.106 23.6719 9.54614 23.6719Z" fill="white"/>
              <path d="M59.8263 26.8699H56.4664C56.1662 26.8699 55.9263 26.6374 55.9263 26.3464C55.9263 26.0555 56.1662 25.8229 56.4664 25.8229H59.8263C60.1264 25.8229 60.3663 26.0555 60.3663 26.3464C60.3663 26.6374 60.1264 26.8699 59.8263 26.8699Z" fill="white"/>
              <path d="M16.9261 4.7819C16.7461 4.7819 16.5662 4.66552 16.4461 4.49114L14.7661 1.70077C14.5861 1.4684 14.7062 1.11925 14.946 0.944889C15.1858 0.770516 15.5462 0.886901 15.7261 1.11926L17.4061 3.90964C17.5861 4.142 17.466 4.49115 17.2262 4.66552C17.1061 4.72391 17.0462 4.7819 16.9261 4.7819Z" fill="white"/>
              <path d="M15.2461 51.8053C15.126 51.8053 15.0661 51.8053 14.946 51.7473C14.7062 51.5729 14.5861 51.2821 14.7661 50.9913L16.4461 48.201C16.626 47.9686 16.9261 47.8522 17.2262 48.0266C17.466 48.201 17.5861 48.4919 17.4061 48.7827L15.7261 51.5729C15.6663 51.6889 15.4261 51.8053 15.2461 51.8053Z" fill="white"/>
              <path d="M4.26608 26.8699H0.906176C0.60609 26.8699 0.366272 26.6374 0.366272 26.3464C0.366272 26.0555 0.60609 25.8229 0.906176 25.8229H4.26608C4.56615 25.8229 4.80599 26.0555 4.80599 26.3464C4.80639 26.6374 4.56615 26.8699 4.26608 26.8699Z" fill="white"/>
              <path d="M43.8062 4.78198C43.6861 4.78198 43.6262 4.78198 43.5061 4.72399C43.2662 4.54962 43.1461 4.25886 43.3261 3.96811L45.006 1.17774C45.186 0.945371 45.4862 0.828988 45.7863 1.00336C46.0262 1.17774 46.1464 1.46849 45.9664 1.75924L44.2864 4.54962C44.1663 4.666 43.9863 4.78198 43.8062 4.78198Z" fill="white"/>
              <path d="M45.4862 51.8053C45.3062 51.8053 45.1262 51.6889 45.006 51.5145L43.3261 48.7243C43.1461 48.4919 43.2662 48.1426 43.5061 47.9682C43.746 47.7938 44.1064 47.9102 44.2864 48.1426L45.9664 50.9329C46.1464 51.1653 46.0262 51.5145 45.7863 51.6889C45.6662 51.8053 45.5461 51.8053 45.4862 51.8053Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_15_180">
                <rect width="60.6774" height="50.9437" fill="white" transform="translate(0 0.860962)"/>
              </clipPath>
            </defs>
          </svg></a>

          <ul>
              <li><a class="smooth-scroll" href="#container_back_1">HOME</a></li>
              <li><a class="smooth-scroll" href="#about_me_title">ABOUT</a></li>
              <li><a class="smooth-scroll" href="#skills_title">SKILLS</a></li>
              <li><a class="smooth-scroll" href="#projects_title">PROJECTS</a></li>
              <li><a class="smooth-scroll" href="#contact_title">CONTACT</a></li>
          </ul>

          <div>
            <select name="screen_mode" id="screen_mode">
                <option value="light">LIGHT</option>
                <option value="dark">DARK</option>
            </select>

            <select name="idiom" id="languageSelect">
                <option value="english">ENGLISH</option>
                <option value="portuguese">PORTUGUESE</option>
            </select>
          </div>
    </header>

    <div id="container_back_1">
      <div id="background">
        <img src="./img/img_background.png" alt="" width="100%">
      </div>
      
      <div id="title">
        <p id="title_1">LET YOUR</p>
        <p id="title_creativity">CREATIVITY</p>
        <p id="title_3">GET OUT OF THE</p>
        <p id="title_4">BOX</p>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 128 128">
          <path d="M15,109.8l48,17c0,0,0,0,0,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.5,0c0,0,0,0,0,0c0,0,0,0,0.1,0 c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V73.4l10-3.5c0.8-0.3,1.5-1,1.8-1.8s0.2-1.8-0.3-2.6l-12-20 c0,0-0.1-0.1-0.1-0.1c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0-0.1c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.1-0.1-0.2-0.1 c0,0,0,0,0,0c0,0,0,0,0,0l-48-17c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c0,0,0,0,0,0 c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.4,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0.1-0.5,0.1l-48,17 c-0.2,0.1-0.3,0.1-0.5,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.2,0.2 c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.2c0,0,0,0.1-0.1,0.1l-12,20c-0.7,1.1-0.6,2.5,0.2,3.4C2.3,69.6,3.1,70,4,70 c0.3,0,0.7-0.1,1-0.2l8-2.8v40C13,108.3,13.8,109.4,15,109.8z M119.5,65.4l-42.2,15l-8.9-14.8l42.2-15L119.5,65.4z M67,34.2L103,47 L67,59.8V34.2z M67,74.8l6.4,10.7C74,86.5,75,87,76,87c0.3,0,0.7-0.1,1-0.2l32-11.3v29.4l-42,14.9V74.8z M19,51.2l42,14.9v53.6 l-42-14.9V51.2z"></path>
        </svg>
      </div>
    </div>

      <div id="lines1">
        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
          <path d="M0 10C0 4.47715 4.47715 0 10 0H14V85H0V10Z" fill="#DBE079"/>
          <path d="M0 14L0 10C0 4.47715 4.47715 0 10 0L85 0V14L0 14Z" fill="#DBE079"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
          <path d="M75 -1.57147e-08C80.5228 -7.0357e-09 85 4.47715 85 10L85 14L1.01108e-05 14L1.01328e-05 -1.33575e-07L75 -1.57147e-08Z" fill="#DBE079"/>
          <path d="M71 0L75 6.28587e-09C80.5228 1.49648e-08 85 4.47715 85 10L85 85L71 85L71 0Z" fill="#DBE079"/>
        </svg>
      </div>
    
      <div id="intro_text">
        <h3 id="intro_text_h3">WELCOME TO MY PORTFOLIO</h3>
        <p id="intro_text_p"></p>
        <a id="btn_about" class="smooth-scroll" href="#about_me_title">SEE ABOUT ME</a>
      </div>

      <div id="lines1">
        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
          <path d="M10 85C4.47715 85 0 80.5228 0 75L0 71H85V85H10Z" fill="#DBE079"/>
          <path d="M14 85H10C4.47715 85 0 80.5228 0 75L0 0H14L14 85Z" fill="#DBE079"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
          <path d="M85 75C85 80.5228 80.5228 85 75 85H71L71 0H85L85 75Z" fill="#DBE079"/>
          <path d="M85 71V75C85 80.5228 80.5228 85 75 85L0 85V71L85 71Z" fill="#DBE079"/>
        </svg>
      </div>

      <div id="container_back_2">
        <div id="inspo_background">
          <img src="./img/inspo_section.png" alt="" width="100%">
        </div>

        <div id="inspo_section">
        <p id="inspo_section_p">
         My primary goal is to please and effectively identify what the client seeks.
         I specialize in creating visually captivating projects with carefully
         structured color palettes. I draw inspiration from vintage, trippy design,
         and flat retro styles, combining them harmoniously to produce eye-catching
         visuals. Whether you're looking for a touch of nostalgia, surreal aesthetics,
         or modern minimalism, my work reflects a versatile approach to design. 
         Beyond web development, I have experience with other programming languages,
         and I am open to continuous learning and growth. Explore my portfolio to seeks
         how I can bring a unique vision to your next project.
        </p>
        <a id="btn_projects" class="smooth-scroll" href="#projects_title"><p>GO TO PROJECTS</p></a>
        </div>
    </div>

      <div id="about_me_title">
        <h2 id="about_me_title_h2">ABOUT ME</h2>
      </div>

      <div id="about_me">
        <div id="about_info">
          <p id="about_me_p"></p>
          <p id="name">ANA LUIZA DE LACERDA</p>
          <p id="about_me_txt"></p>
        </div>
        
        <div id="about_img">
          <img src="./img/profile.png" alt="">
        </div>
      </div>

      <div id="container_language_educ">
        
        <div id="educ">
          <h2 id="educ_title">EDUCATION</h2>
          <div id="box_educ">
            <p>2023 - 2024</p>
            <p id="info_educ">High School It Technical Course</p>
            <p id="school_educ">Cotemig School</p>
          </div>
        </div>
        
        <div id="languages">
          <h2 id="languages_h2">LANGUAGES</h2>
        <section>
          <div id="box_lang_1">
            <p id="lan_01_idiom">English</p>
            <p id="lan_01_lev">Advanced Level</p>
          </div>

          <div id="box_lang_2">
            <p id="lan_02">Portuguese</p>
            <p id="lan_02_lev">Native Language</p>
          </div>
        </section>
        </div>
      </div>

      <div id="skills_title">
        <h2 id="skills_title_h2">SKILLS</h2>
        <p id="skills_title_p">SOFTWARE SKILLS</p>
      </div>

    <section class="container-progress-bar">
      <div class="container">
        <div class="circular-progress">
          <span class="progress-value">0%</span>
        </div>

        <span class="text">HTML</span>
      </div>

      <div class="container_2">
        <div class="circular-progress_2">
          <span class="progress-value_2">0%</span>
        </div>

        <span class="text_2">CSS</span>
      </div>

      <div class="container_3">
        <div class="circular-progress_3">
          <span class="progress-value_3">0%</span>
        </div>

        <span class="text_3">JAVASCRIPT</span>
      </div>

      <div class="container_4">
        <div class="circular-progress_4">
          <span class="progress-value_4">0%</span>
        </div>

        <span class="text_4">C#</span>
      </div>
    </section>

    <section class="container-progress-bar">
      <div class="container_5">
        <div class="circular-progress_5">
          <span class="progress-value_5">0%</span>
        </div>

        <span class="text_5">GIT</span>
      </div>

      <div class="container_6">
        <div class="circular-progress_6">
          <span class="progress-value_6">0%</span>
        </div>

        <span class="text_6">GITHUB</span>
      </div>

      <div class="container_7">
        <div class="circular-progress_7">
          <span class="progress-value_7">0%</span>
        </div>

        <span class="text_7">FIGMA</span>
      </div>

      <div class="container_8">
        <div class="circular-progress_8">
          <span class="progress-value_8">0%</span>
        </div>

        <span class="text_8">MYSQL</span>
      </div>
    </section>

    <div id="skills_title_sf">
      <p id="skills_title_sf_p">SOFT SKILLS</p>
    </div>

    <section id="skill-section">
      <div class="skill-main">
        <div class="skill-bar">
          <div class="info">
            <p id="soft_01">CREATIVITY</p>
            <p class="percent">75%</p>
          </div>
          <div class="bar">
            <span class="creativity"></span>
          </div>
        </div>

        <div class="skill-bar">
          <div class="info">
            <p id="soft_02">PROBLEM SOLVING</p>
            <p class="percent">65%</p>
          </div>
          <div class="bar">
            <span class="p_solving"></span>
          </div>
        </div>

        <div class="skill-bar">
          <div class="info">
            <p id="soft_03">PONTUALITY</p>
            <p class="percent">90%</p>
          </div>
          <div class="bar">
            <span class="pontuality"></span>
          </div>
        </div>

        <div class="skill-bar">
          <div class="info">
            <p id="soft_04">COMMITMENT</p>
            <p class="percent">100%</p>
          </div>
          <div class="bar">
            <span class="commitment"></span>
          </div>
        </div>

        <div class="skill-bar">
          <div class="info">
            <p id="soft_05">EASY LEARNING</p>
            <p class="percent">85%</p>
          </div>
          <div class="bar">
            <span class="easyL"></span>
          </div>
        </div>

        <div class="skill-bar">
          <div class="info">
            <p id="soft_06">COMUNICATION</p>
            <p class="percent">60%</p>
          </div>
          <div class="bar">
            <span class="comunication"></span>
          </div>
        </div>
      </div>
    </section>

    <div id="projects_title">
      <h2 id="projects_title_h2">PROJECTS</h2>
    </div>

    <section id="container-projects">
      <div id="pj_01"><a href="https://artmixx.netlify.app/" target="_blank"><img src="./img/project_artmixx.png" alt=""></a></div>
      <div id="pj_02"><a href="#"><img id="pj_02_img" src="./img/pj_soon.png" alt=""></a></div>
      <div id="pj_03"><a href="#"><img id="pj_03_img" src="./img/pj_soon.png" alt=""></a></div>
    </section>
    
    <div id="btn_seemore">
      <a id="btn_seemore_a" href="#">SEE MORE</a>
    </div>

    <div id="contact_title">
      <h2 id="contact_title_h2">CONTACT</h2>
    </div>

<div class="conteiner">
  <div class="contact-box">
    <div class="contact-left">
    <h3 id="contact-box_h3">SEND YOUR REQUEST</h3>
      <form action="index.php" method="POST">
      <div class="input-row">
        <div class="input-group">
          <label id="contact-box_name">Name</label>
          <input id="input-name" name="name" type="text" placeholder="Maria Smith">
        </div>

        <div class="input-group">
          <label id="contact-box_phone">Phone</label>
          <input oninput="MascaraTelefone()" name="phone" id="plc_hlr_1" type="text" placeholder="">
        </div>
      </div>

                  <div class="input-row">
                      <div class="input-group">
                          <label>Email</label>
                          <input type="email" name="email" placeholder="maria@gmail.com">
                      </div>

                      <div class="input-group">
                          <label id="contact-box_subj">Subject</label>
                          <input id="plc_hlr_2" type="text" name="subject" placeholder="Product Demo">
                      </div>
                  </div>

                  <label id="contact-box_ms">Message</label>
                  <textarea id="plc_hlr_3" rows="5" name="message" placeholder="Your Message"></textarea>
              
                  <button id="contact-box_btn" type="submit" name="submit">SEND</button>
              </form>
          </div>
          
          <div class="contact-right">
              <h3 id="contact-box_h3_2">REACH ME</h3>

              <table>
                  <tr>
                      <td>Email</td>
                      <td>analuizadelacerda@gmail.com</td>
                  </tr>

                  <tr>
                      <td id="contact-box_ph">Phone</td>
                      <td>+55 31 99996-3327</td>
                  </tr>
              </table>
              
              <tr>
              <div id="social-icons">
                <a href="https://github.com/delacerdaq/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
                <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                <a href="https://www.linkedin.com/in/ana-luiza-de-lacerda-409891284/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
            </tr>
          </div>
          </div>
      </div>
  </div>

  <footer id="ft_msg"><p>© 2023 | Ana Luiza de Lacerda | All rights reserved</p></footer>

      <script src="script.js"></script>
</body>
</html>