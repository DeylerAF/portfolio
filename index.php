<?php include("templates/header.php"); ?>
<!-- ========== Header ========== -->
<header class="header" id="header">
    <nav class="nav container navbar-expand-lg">
        <a href="#" class="nav__logo navbar-brand ml-3">Deyler A.F</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="#home" class="nav__link">
                        <i class="fas fa-home nav__icon"></i>Home
                        <!-- <i class="uil uil-estate nav__icon"></i> -->
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">
                        <i class="fas fa-user nav__icon"></i>About
                        <!-- <i class="uil uil-user nav__icon"></i> -->
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#skills" class="nav__link">
                        <i class="fas fa-lightbulb nav__icon"></i>Skills
                        <!-- <i class="uil uil-coffee nav__icon"></i> -->
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#qualifications" class="nav__link">
                        <i class="fas fa-award nav__icon"></i>Qualifications
                        <!-- <i class="uil uil-award nav__icon"></i> -->
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#portfolio" class="nav__link">
                        <i class="fas fa-briefcase nav__icon"></i>Portfolio
                        <!-- <i class="uil uil-presentation-check nav__icon"></i> -->
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="fas fa-paper-plane nav__icon"></i>Contact
                        <!-- <i class="uil uil-message nav__icon"></i> -->
                    </a>
                </li>
            </ul>
            <i class="fas fa-times nav__close" id="nav-close"></i>
            <!-- <i class="uil uil-times nav__close" id="nav-close"></i> -->
        </div>
        <div class="nav__btns">
            <!-- Buttons for Changing Theme -->
            <i data-mode="dark" class="fas fa-moon moon-changed-theme" id="theme-button"></i>
            <!-- <i data-mode="dark" class="uil uil-moon moon-changed-theme" id="theme-button"></i> -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="fas fa-th"></i>
                <!-- <i class="uil uil-apps"></i> -->
            </div>
        </div>
    </nav>
</header>
<!-- ========== Main ========== -->
<main class="main">
    <!-- ----- Home ----- -->
    <section class="home section" id="home">
        <small class="home__welcome s-color">
            Welcome to my portfolio Website!
        </small>
        <div class="home__container container grid">
            <div class="home__content grid">
                <div class="home__social">
                    <a href="" target="_blank" class="home__social-icon" id="myLinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-icon" id="myInstagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-icon" id="myGithub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-icon" id="myFacebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-icon" id="myTwitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="home__data">
                <h1 class="home__title">
                    <div id="typewriter-title"></div>
                </h1>
                <div id="typewriter" class="Typewriter"></div>
                <h3 class="home__subtitle" id="home-bio">
                    I am a web developer and I am currently studying to
                    be a Full-Stack Engineer
                </h3>
                <a href="#contact" class="button button--flex">
                    Contact me
                    <i class="fas fa-paper-plane button__icon"></i>
                </a>
            </div>
        </div>
        <div class="home__scroll">
            <a href="#about" class="home__scroll-button">
                <i class="fas fa-mouse home__scroll-mouse"></i>
                <!-- <i class="uil uil-mouse-alt home__scroll-mouse"></i> -->
                <span class="home__scroll-name"> Scroll Down </span>
                <i class="fas fa-arrow-down home__scroll-arrow"></i>
            </a>
        </div>
    </section>
    <!-- ----- About Me ----- -->
    <section class="about section" id="about">
        <h2 class="section__title">About</h2>
        <span class="section__subtitle"> My Introduction </span>
        <div class="about__container container grid">
            <img src="/img/Me.jpg" alt="Me" class="about__img" />
            <div class="about__data">
                <p class="about__description" id="home-about">
                    Web developer, with more than one year of
                    experience, working with web technologies and
                    delivering quality works.
                </p>
            </div>
            <div class="about__info">
                <div>
                    <span class="about__info-title"> 3 + </span>
                    <span class="about__info-name">
                        Years <br />
                        Experience
                    </span>
                </div>
                <div>
                    <span class="about__info-title"> 5 + </span>
                    <span class="about__info-name">
                        Completed <br />
                        Projects
                    </span>
                </div>
                <div>
                    <span class="about__info-title"> 1 + </span>
                    <span class="about__info-name">
                        Companies <br />
                        Worked
                    </span>
                </div>
            </div>
            <div class="about__buttons">
                <a href="file/CV.pdf" download="Deyler Alvarez Fernández CV" target="_blank" class="button button--flex">
                    Download CV
                    <i class="fas fa-download button__icon"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ----- Skills ----- -->
    <section class="skills section" id="skills">
        <div class="section__title">Skills</div>
        <span class="section__subtitle"> My Skills </span>
        <div class="skills__container container grid">
            <div class="row" id="skill_container">
                <!-- Skill 1 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/html5-without-wordmark-color.svg" alt="HTML Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>HTML</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/Css3-595b40b65ba036ed117d3eb8_jiqifm.svg" alt="CSS Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>CSS</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 3 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/javascript-seeklogo.com_wthmgd.svg" alt="JavaScript Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>JavaScript</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 4 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/bootstrap-5-seeklogo.com_rz32ih.svg" alt="Bootstrap Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>Bootstrap</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 5 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/git-seeklogo.com_eqv1dl.svg" alt="Git Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>Git</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 6 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/github-seeklogo.com_yhhbou.svg" alt="GitHub Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>GitHub</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 7 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/visual-studio-code-seeklogo.com_ps85dh.svg" alt="VScode Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>VScode</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 8 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/tux-seeklogo.com_aiyr1d.svg" alt="Linux Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>Linux</h2>
                        </div>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="skill__container-card">
                    <div class="card_skill shadow2">
                        <div class="imgBx">
                            <img src="img/Microsoft_Office_logo__282019_E2_80_93present_29_pswha1.svg" alt="Microsoft Office Logo" />
                        </div>
                        <div class="contentBx">
                            <h2>Office</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----- Qualifications (Education and Experience) ----- -->
    <section class="qualifications section" id="qualifications">
        <h2 class="section__title">Qualifications</h2>
        <span class="section__subtitle"> My personal Journey </span>
        <div class="qualification__content container">
            <div class="row mt-lg-0">
                <!-- Education -->
                <div class="col-lg-6 col-sm-10 col-md-10 mt-2 qualification__content" id="education">
                    <div class="qualification__button button--flex">
                        <i class="fas fa-user-graduate qualification__icon"></i>
                        Education
                    </div>
                    <div class="education__timeline">
                        <div class="container py-2">
                            <!-- Timeline item 1 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Diseño Web
                                                        Profesional El
                                                        Curso Completo
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        In this course I
                                                        learned HTML5,
                                                        CSS3, Responsive
                                                        Design, Figma,
                                                        SASS,
                                                        JavaScript,
                                                        jQuery,
                                                        Bootstrap 4,
                                                        WordPress, Git,
                                                        GitHub
                                                    </p>
                                                    <a target="_blank" rel="noopener" href="https://www.udemy.com/certificate/UC-bab2fe8b-114e-4661-b41a-a7f2761f176f/" class="button button--flex certificate__button">See Certificate
                                                        <i class="fas fa-scroll certificate__icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 2 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 3 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 4 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item end -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__start">
                                                <i class="fas fa-rocket qualification__start-icon"></i>
                                            </span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience -->
                <div class="col-lg-6 col-sm-10 col-md-10 mt-2 qualification__content" id="experience">
                    <div class="qualification__button button--flex">
                        <i class="fas fa-briefcase qualification__icon"></i>
                        Experience
                    </div>
                    <div class="experience__timeline">
                        <div class="container py-2">
                            <!-- Timeline item 1 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 2 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 3 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item 4 -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                            <!-- https://www.w3schools.com/html/html_entities.asp -->
                                            <!-- https://en.wikipedia.org/wiki/Non-breaking_space -->
                                        </div>
                                    </div>
                                    <h5>
                                        <span class="badge qualification__calendar">
                                            <i class="fas fa-calendar-alt qualification__calendar-icon"></i>
                                            2015
                                        </span>
                                    </h5>
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__line"></span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- Timeline content -->
                                <div class="col py-2">
                                    <div class="card education-card transparent_card mirror-face shadow2">
                                        <div class="card-body">
                                            <div class="task">
                                                <div class="abstract">
                                                    <h3 class="qualification__title">
                                                        Undergrad
                                                    </h3>
                                                    <p class="qualification__subtitle">
                                                        Udemy
                                                    </p>
                                                </div>
                                                <div class="details">
                                                    <p class="qualification__subtitle">
                                                        This is
                                                        additional
                                                        content gets
                                                        reveled on
                                                        hover.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline item end -->
                            <div class="row">
                                <!-- Timeline design -->
                                <div class="col-auto text-center flex-column d-sm-flex">
                                    <div class="row h-50 qualification__journey">
                                        <div class="col">
                                            <span class="qualification__start">
                                                <i class="fas fa-rocket qualification__start-icon"></i>
                                            </span>
                                        </div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----- Portfolio ----- -->
    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Porfolio</h2>
        <span class="section__subtitle">My most recent works</span>
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <!-- For portfolio item 1 -->
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="img/Portfolio-item-im.png" alt="Porfolio item" />
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">1st August 2021</span>
                        <div class="blog-slider__title">Lorem</div>
                        <div class="blog-slider__text">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Tempora perspiciatis ipsum
                            alias eos voluptatem, sit illum temporibus
                            quam tenetur qui ratione sed iusto aperiam
                            nemo laborum enim, quas tempore quasi.
                        </div>
                        <a href="#portfolio" target="_blank" class="button blog-slider__button button--flex">
                            Demo
                            <i class="fas fa-play button__icon"></i>
                        </a>
                    </div>
                </div>
                <!-- For portfolio item 2 -->
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="img/Portfolio-item-im.png" alt="Porfolio item" />
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">1st August 2021</span>
                        <div class="blog-slider__title">Lorem</div>
                        <div class="blog-slider__text">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Tempora perspiciatis ipsum
                            alias eos voluptatem, sit illum temporibus
                            quam tenetur qui ratione sed iusto aperiam
                            nemo laborum enim, quas tempore quasi.
                        </div>
                        <a href="#portfolio" target="_blank" class="button blog-slider__button button--flex">
                            Demo
                            <i class="fas fa-play button__icon"></i>
                        </a>
                    </div>
                </div>
                <!-- For portfolio item 3 -->
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="img/Portfolio-item-im.png" alt="Porfolio item" />
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">1st August 2021</span>
                        <div class="blog-slider__title">Lorem</div>
                        <div class="blog-slider__text">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Tempora perspiciatis ipsum
                            alias eos voluptatem, sit illum temporibus
                            quam tenetur qui ratione sed iusto aperiam
                            nemo laborum enim, quas tempore quasi.
                        </div>
                        <a href="#portfolio" target="_blank" class="button blog-slider__button button--flex">
                            Demo
                            <i class="fas fa-play button__icon"></i>
                        </a>
                    </div>
                </div>
                <!-- For portfolio item 4 -->
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="img/Portfolio-item-im.png" alt="Porfolio item" />
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">1st August 2021</span>
                        <div class="blog-slider__title">Lorem</div>
                        <div class="blog-slider__text">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Tempora perspiciatis ipsum
                            alias eos voluptatem, sit illum temporibus
                            quam tenetur qui ratione sed iusto aperiam
                            nemo laborum enim, quas tempore quasi.
                        </div>
                        <a href="#portfolio" target="_blank" class="button blog-slider__button button--flex">
                            Demo
                            <i class="fas fa-play button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-slider__pagination"></div>
            </div>
        </div>
    </section>
    <!-- ----- Contact Us ----- -->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>
        <div class="row mt-lg-6 justify-content-center contact_mail">
            <!-- Contact information -->
            <div class="col-lg-6 mx-lg-0 mx-2 contact__container container">
                <div class="contact__information">
                    <i class="fas fa-phone contact__icon"></i>
                    <div>
                        <h3 class="contact__title">Call Me</h3>
                        <span class="contact__subtitle">+506-83378235</span>
                    </div>
                </div>
                <div class="contact__information">
                    <i class="fas fa-envelope-open-text contact__icon"></i>
                    <div>
                        <h3 class="contact__title">E-mail</h3>
                        <span class="contact__subtitle">deylerafernandez@gmail.com</span>
                    </div>
                </div>
                <div class="contact__information">
                    <i class="fas fa-map-marked-alt contact__icon"></i>
                    <div>
                        <h3 class="contact__title">Address</h3>
                        <span class="contact__subtitle">Costa Rica, Alajuela, La Fortuna</span>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <div class="col-lg-6 mx-lg-0 mx-2 contact-form" id="message-me">
                <h2 class="contact__title">
                    Interested to work together? -
                    <span> Let's talk </span>
                </h2>
                <form action="#" method="POST" class="cf">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="message-name" class="form-control form__color mb-30 cf" placeholder="Your Name" />
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="message-email" class="form-control form__color mb-30 cf" placeholder="Your Mail" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="message-subject" class="form-control form__color mb-30 cf" placeholder="Subject" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control form__color mb-30 cf" cols="30" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="button button--flex send-message form_button">
                                Send Message
                                <i class="fas fa-paper-plane button__icon"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- ========== Footer ========== -->
<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Deyler A.F</h1>
                <span class="footer__subtitle">Web Developer</span>
            </div>
            <ul class="footer__links">
                <li>
                    <a href="#about" class="footer__link">About Me</a>
                </li>
                <li>
                    <a href="#portfolio" class="footer__link">My Porfolio</a>
                </li>
                <li>
                    <a href="#contact" class="footer__link">Contact Me</a>
                </li>
            </ul>
            <div class="footer__socials">
                <a href="" target="_blank" class="footer__social-icon" id="myLinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" target="_blank" class="footer__social-icon" id="myInstagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" target="_blank" class="footer__social-icon" id="myFacebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="" target="_blank" class="footer__social-icon" id="myTwitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p class="footer__copy">
                &#169; Deyler Alvarez Fernández. All rights reserved
            </p>
        </div>
    </div>
</footer>
<a href="#" class="scroll_up" id="scroll-up">
    <i class="fas fa-arrow-up scroll_up-icon"></i>
</a>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/a9e25f3d46.js" crossorigin="anonymous"></script>
<!-- Typewriter CSS effect -->
<!-- https://www.npmjs.com/package/typewriter-effect -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Personal Scripts -->
<script type="module" src="./script.js"></script>
<script src="./js/sectionHighlight.js"></script>
</body>

</html>