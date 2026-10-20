<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$selectedLanguage = $_GET['lang'] ?? null;

if (in_array($selectedLanguage, ['en', 'nl'], true)) {
    $_SESSION['language'] = $selectedLanguage;
}

$lang = $_SESSION['language'] ?? 'en';

$translations = [
    'home' => [
        'en' => 'Home',
        'nl' => 'Home'
    ],
    'about' => [
        'en' => 'About',
        'nl' => 'Over mij'
    ],
    'work' => [
        'en' => 'Work',
        'nl' => 'Werk'
    ],
    'contact' => [
        'en' => 'Contact',
        'nl' => 'Contact'
    ],
    'cv' => [
        'en' => 'CV',
        'nl' => 'CV'
    ],
    'about_title' => [
        'en' => 'ABOUT ME',
        'nl' => 'OVER MIJ'
    ],
    'about_statement' => [
        'en' => 'From first idea to final build.',
        'nl' => 'Van eerste idee tot eindresultaat.'
    ],
    'projects_title' => [
        'en' => 'PROJECTS',
        'nl' => 'PROJECTEN'
    ],
    'project_details' => [
        'en' => 'Project details',
        'nl' => 'Projectbeschrijving'
    ],
    'project_not_found' => [
        'en' => 'This project could not be found.',
        'nl' => 'Dit project is niet gevonden.'
    ],
    'all_projects' => [
        'en' => 'VIEW ALL PROJECTS',
        'nl' => 'BEKIJK ALLE PROJECTEN'
    ],
 'photography_description' => [
    'en' => 'I developed a portfolio website for photographer Jamie Vis, putting his photography at the centre of the design. I started with separate PHP, HTML and CSS files before moving to Laravel. Using routes and Blade templates, I built a photo gallery, an About page and individual photo pages with titles, locations and descriptions. Photos from the same series are automatically grouped together.
I used CSS and JavaScript to add subtle movement, hover effects and an enlarged photo viewer. On the About page, I animated the photographer’s name with GSAP. To improve loading times, the homepage uses smaller WebP images and lazy loading, while the detail pages display the original photographs.
I developed the website locally using Docker and Laravel Sail, then deployed it to Render through GitHub. This project taught me a lot about Laravel, responsive design, improving loading times and troubleshooting issues during development and deployment.',
    'nl' => 'Voor fotograaf Jamie Vis heb ik een portfolio ontwikkeld waarin zijn fotografie centraal staat. Ik begon met losse PHP-, HTML- en CSS-bestanden en stapte daarna over op Laravel. Met routes en Blade-templates maakte ik een fotogalerij, een About-pagina en detailpagina’s met een titel, locatie en beschrijving. Foto’s uit dezelfde serie worden automatisch bij elkaar getoond.
           Met CSS en JavaScript voegde ik subtiele bewegingen, hover-effecten en een vergrote fotoweergave toe. Op de About-pagina animeerde ik de naam van de fotograaf met GSAP. Om de website sneller te maken, gebruikt de homepage kleinere WebP-afbeeldingen en lazy loading. De detailpagina’s tonen de originele foto’s.
            Tijdens het bouwen werkte ik lokaal met Docker en Laravel Sail. Daarna publiceerde ik de website via GitHub op Render. Door dit project heb ik veel geleerd over Laravel, responsive vormgeving, het verbeteren van laadtijden en het oplossen van fouten tijdens het ontwikkelen en publiceren.'
],
'lawyer_description' => [
    'en' => 'I built this website from scratch with PHP for NevaNexis, a legal adviser. The aim was to clearly present their services and make it easy for visitors to get in touch. This project gave me the chance to put what I have learned into practice for a real client.',
    'nl' => 'Deze website heb ik helemaal zelf gebouwd met PHP voor jurist NevaNexis. Het doel was om de diensten duidelijk te presenteren en het bezoekers makkelijk te maken om contact op te nemen. Met dit project kon ik wat ik heb geleerd in de praktijk toepassen voor een echte klant.'
],
'cyberdeck_description' => [
    'en' => 'A personal passion project where I combine hardware with software. I built my own portable computer using a Raspberry Pi , a small screen, and a mini-keyboard. To challenge myself, I installed and configured Arch Linux completely from scratch using the terminal, which taught me a lot about package management, system settings, and getting hardware components to talk to software.The project is currently a work in progress, and I am actively learning more as I plan to expand the system with new hardware modules and custom tools.',
    'nl' => 'Een persoonlijk passieproject waarin ik hardware met software combineer. Ik heb mijn eigen draagbare computer gebouwd met een Raspberry Pi , een klein scherm en een mini-toetsenbord. Om mezelf uit te dagen heb ik Arch Linux volledig vanaf nul geïnstalleerd en geconfigureerd via de terminal. Dit heeft me ontzettend veel geleerd over package management, systeeminstellingen en hoe je hardware-componenten laat communiceren met software. Het project is momenteel nog in ontwikkeling.ik leer hier actief van door terwijl ik plannen maak om het systeem uit te breiden met nieuwe hardware-modules en eigen tooling.'
],
'technologies_used' => [
    'en' => 'TOOLS / LANGUAGES',
    'nl' => 'BENODIGDHEDEN / TALEN'
],
    'contact_text' => [
        'en' => 'INTERESTED? GET IN TOUCH',
        'nl' => 'INTERESSE? NEEM CONTACT MET MIJ OP'
    ],
    'education' => [
        'en' => 'EDUCATION',
        'nl' => 'OPLEIDING'
    ],
    'currently_learning' => [
        'en' => 'CURRENTLY LEARNING',
        'nl' => 'DIT BEN IK AAN HET LEREN'
    ],
    'languages' => [
        'en' => 'LANGUAGES',
        'nl' => 'TALEN DIE IK BEHEERS'
    ],
    'spoken_languages' => [
        'en' => 'Dutch, English',
        'nl' => 'Nederlands, Engels'
    ]
    ,
'about_description' => [
    'en' => "I'm a third-year Software Development student at Mediacollege Amsterdam. I enjoy making creative applications and learning how everything works behind the scenes, from backend code and databases to hardware. In my own projects, including an ESP32 project, I try out new techniques and build my skills step by step.",
    'nl' => 'Ik ben derdejaars student Software Development aan het Mediacollege Amsterdam. Ik werk graag aan creatieve toepassingen en vind het interessant om te ontdekken hoe alles achter de schermen samenwerkt: van backend en databases tot hardware. In mijn eigen projecten, waaronder een ESP32-project, probeer ik nieuwe technieken uit en bouw ik mijn kennis stap voor stap verder op.'
],
'about_cv_text' => [
    'en' => 'You can take a look at my CV to learn more about my experience.',
    'nl' => 'Bekijk mijn cv om meer te weten te komen over mij'
],
'cv_intro' => [
    'en' => "Hiiii, my name is Nazli Eroglu.",
    'nl' => 'Hoiii, mijn naam is Nazli Eroglu.'
],
'cv_student' => [
    'en' => "I'm a 19-year-old Software Development student at Mediacollege Amsterdam.",
    'nl' => 'Ik ben 19 jaar en studeer Software Development aan het Mediacollege Amsterdam.'
],
'cv_interests' => [
    'en' => 'I enjoy working with software engineering, databases, backend development and hardware.',
    'nl' => 'Ik werk graag met softwareontwikkeling, databases, backendontwikkeling en hardware.'
],
'cv_subject' => [
    'en' => 'Subject',
    'nl' => 'Onderdeel'
],
'cv_skills_basic' => [
    'en' => 'Skills — Basic Knowledge',
    'nl' => 'Vaardigheden — Basiskennis'
],
'cv_web_tools' => [
    'en' => 'Web & Tools',
    'nl' => 'Web & Tools'
],
'cv_interactive_systems' => [
    'en' => 'Interactive Systems Design',
    'nl' => 'Ontwerp van interactieve systemen'
],
'cv_electronics' => [
    'en' => 'Electronics Prototyping',
    'nl' => 'Elektronica Prototyping'
],
'cv_data_network' => [
    'en' => 'Data & Network Software',
    'nl' => 'Data & Netwerk Software'
],
'cv_github' => [
    'en' => 'CHECK MY GITHUB',
    'nl' => 'BEKIJK MIJN GITHUB'
],
'cv_download' => [
    'en' => 'DOWNLOAD CV',
    'nl' => 'DOWNLOAD MIJN CV'
],
'cv_photo_alt' => [
    'en' => 'Portrait of Nazli Eroglu',
    'nl' => 'Portret van Nazli Eroglu'
],
'cv_course' => [
    'en' => 'Software Developer',
    'nl' => 'Softwareontwikkelaar'
], 
'cv_education' => [
    'en' => 'EDUCATION',
    'nl' => 'OPLEIDING'
],
'cv_currently_learning' => [
    'en' => 'CURRENTLY LEARNING',
    'nl' => 'DIT BEN IK AAN HET LEREN'
],
'cv_languages' => [
    'en' => 'LANGUAGES',
    'nl' => 'Talen die ik beheers'
],

'signalshark_description' => [
    'en' => 'A personal passion project where I combine hardware with software. I built my own portable computer using a Raspberry Pi 5, a small screen, and a mini-keyboard. To challenge myself, I installed and configured Arch Linux completely from scratch using the terminal, which taught me a lot about package management, system settings, and getting hardware components to talk to software. The project is currently a work in progress, and I am actively learning more as I plan to expand the system with new hardware modules and custom tools.',
    'nl' => 'Een persoonlijk passieproject waarin ik hardware met software combineer. Ik heb mijn eigen draagbare computer gebouwd met een Raspberry Pi 5, een klein scherm en een mini-toetsenbord. Om mezelf uit te dagen heb ik Arch Linux volledig vanaf nul geïnstalleerd en geconfigureerd via de terminal. Dit heeft me ontzettend veel geleerd over package management, systeeminstellingen en hoe je hardware-componenten laat communiceren met software. Het project is momenteel nog in ontwikkeling. Ik leer hier actief van terwijl ik plannen maak om het systeem uit te breiden met nieuwe hardwaremodules en eigen tools.'
],

'contact_heading' => [
    'en' => 'Let’s get in touch.',
    'nl' => 'Neem gerust contact op.'
],
'contact_profile' => [
    'en' => 'Visit my profile',
    'nl' => 'Bekijk mijn profiel'
],
'contact_simple_text' => [
    'en' => 'Have a question about my work, want to work together, or just want to say hello? Send me an email or a message on LinkedIn. I’d be happy to hear from you.',
    'nl' => 'Heb je een vraag over mijn werk, wil je samenwerken of gewoon even kennismaken? Stuur me gerust een mail of een bericht via LinkedIn. Ik hoor graag van je.'
],
'contact_email' => [
    'en' => 'EMAIL',
    'nl' => 'E-MAIL'
],

'visit_website' => [
    'en' => 'Visit website',
    'nl' => 'Bekijk website'
],
'view_github' => [
    'en' => 'View on GitHub',
    'nl' => 'Bekijk op GitHub'
],
]
;

function t(string $key): string
{
    global $translations, $lang;

    $text = $translations[$key][$lang]
        ?? $translations[$key]['en']
        ?? $key;

    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
