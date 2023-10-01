function ToggleMode()
{
    const selectModoEscuro = document.getElementById('screen_mode');
    
    selectModoEscuro.addEventListener('change', function () 
    {
        const modoSelecionado = selectModoEscuro.value;
      
        if (modoSelecionado === 'light') 
        {
          document.documentElement.style.setProperty('--text-color', '#fff');
          document.documentElement.style.setProperty('--text-color-titles', '#EBEF9F');
          document.documentElement.style.setProperty('--text-color-skills-scroll-bar', '#606060');
          document.documentElement.style.setProperty(' --background-skill-bar', '#d9d9d9');
          document.documentElement.style.setProperty('--yellow-1', '#DBE079');
          document.documentElement.style.setProperty('--yellow-2', '#8F9432');
          document.documentElement.style.setProperty('--purple-1', '#D4A3FF');
          document.documentElement.style.setProperty('--purple-2', '#B079E0');
          document.documentElement.style.setProperty('--purple-light-background-lang', '#7238A5');
          document.documentElement.style.setProperty('--background', '#663194');

        } 
        else if (modoSelecionado === 'dark') 
        {
          document.documentElement.style.setProperty('--text-color', '#fff');
          document.documentElement.style.setProperty('--text-color-titles', '#ADB243');
          document.documentElement.style.setProperty('--text-color-skills-scroll-bar', '#2b2b2b');
          document.documentElement.style.setProperty(' --background-skill-bar', '#d9d9d9');
          document.documentElement.style.setProperty('--yellow-1', '#ADB243');
          document.documentElement.style.setProperty('--yellow-2', '#60641E');
          document.documentElement.style.setProperty('--purple-1', '#663194');
          document.documentElement.style.setProperty('--purple-2', '#9A4AE0');
          document.documentElement.style.setProperty('--purple-light-background-lang', '#663194');
          document.documentElement.style.setProperty('--background', '#2E1047');
        }
    });
}
ToggleMode();

// ================================================================================================================================== //

function MascaraTelefone()
{
var tel = document.getElementById("plc_hlr_1").value

tel = tel.slice(0,14)

document.getElementById("plc_hlr_1").value = tel

//mascara
var tel_formatado = document.getElementById("plc_hlr_1").value
if (tel_formatado[0]!="(")
{
    if(tel_formatado[0]!=undefined)
    {
        document.getElementById("plc_hlr_1").value = "(" + tel_formatado[0];
    }
}

if (tel_formatado[3]!=")")
{
    if (tel_formatado[3]!=undefined)
    {
        document.getElementById("plc_hlr_1").value = tel_formatado.slice(0,3) + ")" + tel_formatado[3];
    }
}

if(tel_formatado[9]!="-")
{
    if(tel_formatado[9]!=undefined)
    {
        document.getElementById("plc_hlr_1").value = tel_formatado.slice(0,9) + "-" + tel_formatado[9];
    }
}
}

// ================================================================================================================================== //

// Função para animar o círculo de progresso
function animateProgress(circularProgress, progressValue, progressEndValue) {
    let progressStartValue = 0;
    const speed = 25;

    const progress = setInterval(() => {
        progressStartValue++;

        progressValue.textContent = `${progressStartValue}%`;
        circularProgress.style.background = `conic-gradient(var(--yellow-1) ${progressStartValue * 3.6}deg, var(--text-color) 0deg)`;

        if (progressStartValue === progressEndValue) {
            clearInterval(progress);
        }
    }, speed);
}

// Função para configurar o Intersection Observer
function setupCircularProgressObserver(circularProgress, progressValue, progressEndValue) {
    const options = {
        threshold: 0.5, // 50% do elemento deve estar visível
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateProgress(circularProgress, progressValue, progressEndValue);
                observer.unobserve(circularProgress);
            }
        });
    }, options);

    observer.observe(circularProgress);
}

//primeira seção de progresso circular
const circularProgress = document.querySelector(".circular-progress");
const progressValue = document.querySelector(".progress-value");
const progressEndValue = 90; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress, progressValue, progressEndValue);

//segunda seção de progresso circular
const circularProgress_2 = document.querySelector(".circular-progress_2");
const progressValue_2 = document.querySelector(".progress-value_2");
const progressEndValue_2 = 80; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_2, progressValue_2, progressEndValue_2);

//terceira seção de progresso circular

const circularProgress_3 = document.querySelector(".circular-progress_3");
const progressValue_3 = document.querySelector(".progress-value_3");
const progressEndValue_3 = 30; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_3, progressValue_3, progressEndValue_3);

//quarta seção de progresso circular

const circularProgress_4 = document.querySelector(".circular-progress_4");
const progressValue_4 = document.querySelector(".progress-value_4");
const progressEndValue_4 = 60; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_4, progressValue_4, progressEndValue_4);

//quinta seção de progresso circular

const circularProgress_5 = document.querySelector(".circular-progress_5");
const progressValue_5 = document.querySelector(".progress-value_5");
const progressEndValue_5 = 50; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_5, progressValue_5, progressEndValue_5);

//sexta seção de progresso circular

const circularProgress_6 = document.querySelector(".circular-progress_6");
const progressValue_6 = document.querySelector(".progress-value_6");
const progressEndValue_6 = 60; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_6, progressValue_6, progressEndValue_6);

//setima seção de progresso circular

const circularProgress_7 = document.querySelector(".circular-progress_7");
const progressValue_7 = document.querySelector(".progress-value_7");
const progressEndValue_7 = 70; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_7, progressValue_7, progressEndValue_7);

//oitava seção de progresso circular

const circularProgress_8 = document.querySelector(".circular-progress_8");
const progressValue_8 = document.querySelector(".progress-value_8");
const progressEndValue_8 = 45; // Defina o valor final para esta seção

setupCircularProgressObserver(circularProgress_8, progressValue_8, progressEndValue_8);

// ================================================================================================================================== //

    document.querySelectorAll('.smooth-scroll').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 110,
                    behavior: 'smooth' // Ativa a animação de rolagem suave
                });
            }
        });
    });
// ================================================================================================================================== //

function alterarTexto() {
    var title_1 = document.getElementById("title_1");
    var title_2 = document.getElementById("title_creativity");
    var title_3 = document.getElementById("title_3");
    var title_4 = document.getElementById("title_4");
    var welcome_intro = document.getElementById("intro_text_h3");
    var introText = document.getElementById("inspo_section_p");
    var button_about = document.getElementById("btn_about");
    var introText_2 = document.getElementById("intro_text_p");
    var button = document.getElementById("btn_projects");
    var languageSelect = document.getElementById("languageSelect");
    var title_about = document.getElementById("about_me_title_h2");
    var title_about_1 = document.getElementById("about_me_p");
    var title_about_3 = document.getElementById("about_me_txt");
    var educ_title = document.getElementById("educ_title");
    var name_course = document.getElementById("info_educ");
    var school = document.getElementById("school_educ");
    var language_title = document.getElementById("languages_h2");
    var lan_01_idiom = document.getElementById("lan_01_idiom"); 
    var lan_01_lev = document.getElementById("lan_01_lev");
    var lan_02 = document.getElementById("lan_02");
    var lan_02_lev = document.getElementById("lan_02_lev");
    var skills_title = document.getElementById("skills_title_h2");
    var skills_title_sf = document.getElementById("skills_title_p");
    var soft_01 = document.getElementById("soft_01");
    var soft_02 = document.getElementById("soft_02");
    var soft_03 = document.getElementById("soft_03");
    var soft_04 = document.getElementById("soft_04");
    var soft_05 = document.getElementById("soft_05");
    var soft_06 = document.getElementById("soft_06");
    var projects_title = document.getElementById("projects_title_h2");
    var btn_seemore = document.getElementById("btn_seemore_a");
    var contact_title = document.getElementById("contact_title_h2");
    var duvidas = document.getElementById("contact-box_h3");
    var name = document.getElementById("contact-box_name");
    var phone = document.getElementById("contact-box_phone");
    var ph = document.getElementById("contact-box_ph");
    var assunto = document.getElementById("contact-box_subj");
    var msg = document.getElementById("contact-box_ms");
    var btn_submit = document.getElementById("contact-box_btn");
    var follow = document.getElementById("contact-box_h3_2");
    var ft_msg = document.getElementById("ft_msg");
    var imagem1 = document.getElementById('pj_02_img');
    var imagem2 = document.getElementById('pj_03_img');
    var plc_hlr_1 = document.getElementById("plc_hlr_1");
    var plc_hlr_2 = document.getElementById("plc_hlr_2");
    var plc_hlr_3 = document.getElementById("plc_hlr_3");

    if (languageSelect.value === "portuguese") 
    {
        title_1.textContent = `DEIXE SUA`,

        title_2.textContent = `CRIATIVIDADE`,

        title_3.textContent = `SAIR DA`,

        title_4.textContent = `CAIXA`,

        welcome_intro.textContent = `BEM-VINDO(A) AO MEU PORTFOLIO`,
        
        introText_2.innerHTML = `Desbloqueie o potencial da sua visão digital com soluções web <br>
         de ponta. Me especializo em criar websites deslumbrantes e <br>
        personalizados que dão vida às suas ideias. Minha missão é <br> 
        transformar seus conceitos em experiências online cativantes,<br> 
        onde a criatividade encontra a funcionalidade. Seu website <br> 
        dos sonhos aguarda, e estou aqui para torná-lo realidade.`,

        button_about.textContent = `VER SOBRE MIM`,
        
        introText.innerHTML = `Meu objetivo principal é agradar e identificar de forma eficaz o que o cliente busca. <br>
        Eu me especializo em criar projetos visualmente cativantes com paletas de cores  <br>
        cuidadosamente estruturadas. Se você está procurando um toque de nostalgia, estética  <br>
        surreal ou minimalismo moderno, meu trabalho reflete uma abordagem versátil para o design. <br>
        Além do desenvolvimento web, tenho experiência com outras linguagens de programação <br>
        e estou aberto à aprendizagem contínua e ao crescimento. Explore meu portfólio para ver <br>
        como posso trazer uma visão única para o seu próximo projeto.`,
        
        button.textContent = `IR PARA PROJETOS`,

        title_about.textContent = `SOBRE MIM`,

        title_about_1.textContent = `Olá! Meu nome é`,

        title_about_3.innerHTML = `Eu sou uma estudante do curso técnico de Informática da escola/faculdade Cotemig, <br>
        com interesse em seguir a área de TI e me tornar uma <br>
        desenvolvedora full-stack.`,

        educ_title.textContent = `EDUCAÇÃO`,

        name_course.textContent = `Ensino Médio Técnico`,

        school.textContent = `Escola Cotemig`,

        language_title.textContent = `LINGUAGENS`,

        lan_01_idiom.textContent = `Inglês`,

        lan_01_lev.textContent = `Inglês Avançado`,

        lan_02.textContent = `Português`,

        lan_02_lev.textContent = `Língua Nativa`,

        skills_title.textContent = `HABILIDADES`,

        skills_title_sf.textContent = `HARD SKILLS`,

        soft_01.textContent = `CRIATIVIDADE`;

        soft_02.textContent = `RESOLUÇÃO DE PROBLEMAS`;

        soft_03.textContent = `PONTUALIDADE`;

        soft_04.textContent = `COMPROMETIMENTO`;

        soft_05.textContent = `FACILIDADE EM APRENDER`;

        soft_06.textContent = `COMUNICAÇÃO`;

        projects_title.textContent = `PROJETOS`;

        btn_seemore.textContent = `VER MAIS`;
        
        contact_title.textContent = `CONTATO`;

        duvidas.textContent = `MANDE SUA DÚVIDA`;

        name.textContent = `Nome`;

        phone.textContent = `Telefone`;

        assunto.textContent = `Assunto`;

        msg.textContent = `Mensagem`;

        btn_submit.textContent = `ENVIAR`;

        follow.textContent = `ME SIGA | CONTATE`;

        ph.textContent = `Telefone`;

        ft_msg.textContent = `© 2023 | Ana Luiza de Lacerda | Todos os Direitos Reservados`;

        pj_02_img.src = './img/pj_em_breve.png';
        pj_03_img.src = './img/pj_em_breve.png';

        plc_hlr_1.placeholder = `(31)99999-9999`;

        plc_hlr_2.placeholder = `Interesse em serviços`;

        plc_hlr_3.placeholder = `Sua mensagem`;
    } 
    
    else if (languageSelect.value === "english") 
    {
        title_1.textContent = `LET YOUR`,

        title_2.textContent = `CREATIVITY`,

        title_3.textContent = `GET OUT OF THE`,

        title_4.textContent = `BOX`,

        welcome_intro.textContent = `WELCOME TO MY PORTFOLIO`,

        introText_2.innerHTML = `Unlock the potential of your digital vision with cutting-<br>
        edge web solutions. I specialize in crafting stunning and <br>
        bespoke websites that breathe life into your ideas. My <br>
        mission is to transform your concepts into captivating <br>
        online experiences, where creativity meets functionality. <br>
        Your dream website awaits, and we're here to <br>
        make it a reality.`,

        button_about.textContent = `SEE ABOUT ME`,
        
        introText.innerHTML = `My primary goal is to please and effectively identify what the client seeks. <br>
        I specialize in creating visually captivating projects with carefully structured <br>
         color palettes. Whether you're looking for a touch of nostalgia, surreal aesthetics, <br>
        or modern minimalism, my work reflects a versatile approach to design. <br>
        Beyond web development, I have experience with other programming languages, <br>
        and I am open to continuous learning and growth. Explore my portfolio to seeks <br>
        how I can bring a unique vision to your next project.`,
        
        button.textContent = `GO TO PROJECTS`,

        title_about.textContent = `ABOUT ME`,

        title_about_1.textContent = `Hello! my name's`,

        title_about_3.innerHTML = `I am a student of the IT technical course from Cotemig School/College, <br>
        with an interest in pursuing a career in the IT field and becoming a <br>
        full-stack web developer.`,

        educ_title.textContent = `EDUCATION`,

        name_course.textContent = `High School It Technical Course`,

        school.textContent = `Cotemig School`;

        language_title.textContent = `LANGUAGES`,

        lan_01_idiom.textContent = `English`;

        lan_01_lev.textContent = `Advanced English`,

        lan_02.textContent = `Portuguese`,

        lan_02_lev.textContent = `Native Language`,

        skills_title.textContent = `SKILLS`,

        skills_title_sf.textContent = `HARD SKILLS`,

        soft_01.textContent = `CREATIVITY`;

        soft_02.textContent = `PROBLEM SOLVING`;

        soft_03.textContent = `PONTUALITY`;

        soft_04.textContent = `COMMITMENT`;

        soft_05.textContent = `EASY LEARNING`;

        soft_06.textContent = `COMUNICATION`;

        projects_title.textContent = `PROJECTS`;

        btn_seemore.textContent = `SEE MORE`;

        contact_title.textContent = `CONTACT`;

        duvidas.textContent = `SEND YOUR REQUEST`;

        name.textContent = `Name`;

        phone.textContent = `Phone`;

        assunto.textContent = `Subject`

        msg.textContent = `Message`;

        ph.textContent = `Phone`;

        btn_submit.textContent = `SUBMIT`;

        follow.textContent = `FOLLOW | CONTACT ME`;

        ft_msg.textContent = `© 2023 | Ana Luiza de Lacerda | All rights reserved`;

        pj_02_img.src = './img/pj_soon.png';
        pj_03_img.src = './img/pj_soon.png';

        plc_hlr_1.placeholder = `+1 584 125 3565`;

        plc_hlr_2.placeholder = `Interesting in services`;

        plc_hlr_3.placeholder = `Your message`;
            
    } 
}

// Adiciona um ouvinte de eventos para detectar a mudança na seleção
var selectElement = document.getElementById("languageSelect");
selectElement.addEventListener("change", alterarTexto);

alterarTexto(); 

// ================================================================================================================================== //

// Função para verificar se um elemento está visível na tela
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Função para reiniciar a animação quando um elemento entra na tela
function restartAnimationOnScroll() {
    const bars = document.querySelectorAll('.skill-bar .bar span');

    bars.forEach(bar => {
        if (isElementInViewport(bar)) {
            bar.style.animation = 'none'; // Limpa a animação
            void bar.offsetWidth; // Força um repaint
            bar.style.animation = bar.classList[0] + ' 3s'; // Inicia a animação novamente
        }
    });
}

// Adicione um ouvinte de evento de rolagem para chamar a função quando o usuário rolar a página
window.addEventListener('scroll', restartAnimationOnScroll);

// Chame a função uma vez na inicialização para verificar os elementos que já estão na tela
restartAnimationOnScroll();

// ================================================================================================================================== //



    







