<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="mon portfolio comme un information pour prisenter moi meme">
    <meta name="mot-cle" content="portfolio,informatique,projets">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<script src="jquery-3.7.1.min.js"></script>-->
</head>
<body>
    
    <img src="aa.jpg" alt="" height='100px'>
    <ol>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#projet">My Projects</a></li>
        <li><a href="#contact">Contact Me</a></li>
    </ol>
    <h1>Wellcome Here</h1>
    <p>Bonjour, je m'appelle Nidhal BENHAMAHOUM, j'ai 20 ans, je suis ingénieur logiciel intermédiaire et programmeur. Je vis en Algérie, j'étudie l'informatique depuis une année à l'université. Je travaille dans un projet, donc c'est l'espace où je me suis mis au travail qui m'a défini. donc tu en sais plus sur moi
    </p>
    <div id="about">
        <h1>About Me</h1>
        <!--<img src="" alt="">-->
        <p><h3>Nom: </h3>BENHAMAHOUM</p>
        <p><h3>PRENOM: </h3>Nidhal</p>
        <p><h3>AGE: </h3>20</p>
        <p><h3>EDUCATION: </h3>3eme university informatique</p>
        <p><h3>SPECIALITE: </h3>fullstack,desktop application</p>
        <p><h3>LANGAGE UTILISER ET CONNUE: </h3>php,larevel,js,java,html,css,bootstrap</p>
        <p><h3>SERVICES:</h3> build simple website,ecommerce websit,system gerer votre entreprise</p>
    </div>
    <div id="competence">
    <h1>Mon competences</h1>
    <p><h3>Front end: </h3>56%</p>
        <p><h3>Back end: </h3>20%</p>
        <p><h3>Desktop projets: </h3>50%</p>
    </div>
    <div id="Experence">
    <h1>Mon Experence</h1>
    <h3>mon experence est limiter je faire quelque projet dans le passer et experence est sellement comme etudient unverser j'ai travail jammais dans entreprise</h3>
    </div>
    <div id="projet">
    <h1>Mon Projets</h1>
        <div class="container2">
            <div class="fles">
                <button id="1">Projet 1</button>
        <button id="2">Projet 2</button>
        <button id="3">Projet 3</button>
    </div>
        
            <div class="cont">
                <h3>Nom de projet: </h3><div id="n_projet">E-commerce websit</div>
                <h3>Description : </h3><div id="desc">E-commerce website ou tu peut acheter n'import quoi tu doit </div>
                <h3>Taille de Projet: </h3><div id="t_projet">grande</div>
                <h3>Photos : </h3><div id="photo">
                <div class="galory-warp">
                    <button id="preves" onclick = "preves()"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="galory">
   
                            <div>
                                <img src="images/a1.jpg" alt="" id='img-1'>
                                <img src="images/a2.jpg" alt="" id='img-2'>
                                <img src="images/a3.jpg" alt="" id='img-3'> 
                            </div>
                            <div>
                                <img src="a7.jpg" alt="" id='img-4'>
                                <img src="images/a4.jpg" alt="" id='img-5'> 
                            </div>
                        </div>
                    <button id="next" onclick = "next()" ><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                </div>
                <h3>Language Utiliser: </h3>
                <div class="cont-total">
                <h3 id="l1">php</h3>
                <div class="cont2 l4">
                
                    <div class="circul">
                        <div class="value-container">
                            0%
                        </div>
                    </div>
                </div>
                <h3 id="l2">html</h3>
                <div class="cont2 l5">

                    <div class="circul1">
                        <div class="value-container1">
                            0%
                        </div>
                    </div>
                </div>
                <h3 id="l3">css</h3>
                <div class="cont2 l6">
                
                    <div class="circul2">
                        <div class="value-container2">
                            0%
                        </div>
                    </div>
                </div>
                </div>
                <div class="cont-total1">  </div>
            </div>
            
    </div>
    <div id="contact">
        <h1>Contact Us</h1>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form action="https://formsubmit.co/your@email.com" method="POST">
                    <div class="input-row">
                        <div class="input-groupe">
                            <label>Name</label>
                            <input type="text" name="name" required placeholder="Entre votre name">
                        </div>
                        
                    </div>

                    <div class="input-row">
                        <div class="input-groupe">
                            <label >Email</label>
                            <input type="email" name="email" required placeholder="Entre votre email">
                        </div>
                        <div class="input-groupe">
                            <label>Subject</label>
                            <input type="text" name="subject" required placeholder="Subject de message">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" name="message" required placeholder="write votre message"></textarea>
                    <button type="submit">SEND</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>benhamahoum.nidhal@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+213-797224004</td>
                    </tr>
                    <tr>
                        <td>Adress</td>
                        <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d502.9545894001606!2d7.284393074896239!3d36.419092276495995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sdz!4v1704674784069!5m2!1sar!2sdz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
            
            $(document).ready(function(){
                for(let i=1;i<4;i++){
                    let y ="#"+i;
                    $(y).on('click', function(){
                        $.post("serve2.php",
                        {
                            ide: i
                            
                        },
                        function(data, status){
                            //let id = data.id_w;
                                //let nom = data.nom_w;
                                //let langage = data.langage;
                                //let moyen = data.moyen;
                                //let photo = data.photo1;
                                
                                $('#n_projet').html(data.nome)  ;
                                $('#desc').html(data.desc)  ;
                                //$('#langage_w').html("Langage utiliser: "+langage) ;
                                $('#t_projet').html(data.moyen)  ;
                                //$('#photo').attr("src",photo);
                                let arr1 = data.langage;
                                
                                let r=1;
                                for(let key in arr1){
                                    let f = '#l' +r;
                                    
                                    
                                    value1 = arr1[key];
                                    $(f).html (key);
                                    
                                    console.log(f,key,value1);
                                    let prograss_value = 0;
                                    let prograss_value1 = 0;
                                    let prograss_value2 = 0;
                                    let prograss_end = 65;
                                    let prograss_end1 = 75;
                                    let prograss_end2 = 25;
                                    let speed = 40;
                                    if(r==1){
                                        prograss_end = value1;
                                        let pro = setInterval(()=>{
                                            prograss_value++;
                                            val.textContent = `${prograss_value} %`;
                                            progress.style.background = `conic-gradient(
                                                #2c97d8 ${prograss_value * 3.6}deg,
                                                #cadcff ${prograss_value * 3.6}deg
                                            )`
                                            if (prograss_value==prograss_end){
                                                clearInterval(pro);
                                                
                                            }
                                        },speed)
                                    }
                                    if(r==2){
                                        prograss_end1 = value1;
                                        let pro1 = setInterval(()=>{
                                            prograss_value1++;
                                            val1.textContent = `${prograss_value1} %`;
                                            progress1.style.background = `conic-gradient(
                                                orange ${prograss_value1 * 3.6}deg,
                                                #ffff88 ${prograss_value1 * 3.6}deg
                                            )`
                                            if (prograss_value1==prograss_end1){
                                                clearInterval(pro1);
                                                
                                            }
                                        },speed)
                                    }
                                    if(r==3){
                                        prograss_end2 = value1;
                                        let pro2 = setInterval(()=>{
                                            prograss_value2++;
                                            val2.textContent = `${prograss_value2} %`;
                                            progress2.style.background = `conic-gradient(
                                                green ${prograss_value2 * 3.6}deg,
                                                lightgreen ${prograss_value2 * 3.6}deg
                                            )`
                                            if (prograss_value2==prograss_end2){
                                                clearInterval(pro2);
                                                
                                            }
                                        },speed)
                                    }   
                                    r++;
                                }
                                let arr2 = data.img;
                                let t=1;
                                for(let key1 in arr2){
                                    let m = '#img-' +t;
                                    
                                    
                                    value2 = arr2[key1];
                                    $(m).attr("src","images/"+value2);
                                    t++;
                                }
                        });
                        });
                    }
                        
                });
                function preves(){
                    let cont = document.querySelector('.galory');
                    cont.style.ScrollByY -= '300px'; 
                }
                function next(){
                    let cont = document.querySelector('.galory');
                    let next = document.getElementById('next');
                    let preves = document.getElementById('preves');
                    cont.style.scrollBehavior = 'auto';
                    next.addEventListener('click',()=>{
                        cont.style.scrollBehavior = 'smooth';
                        cont.scrollLeft += 900;
                    });
                    preves.addEventListener('click',()=>{
                        cont.style.scrollBehavior = 'smooth';
                        cont.scrollLeft -= 900;
                    });
                }
                let prograss_value = 0;
                let prograss_value1 = 0;
                let prograss_value2 = 0;
                let prograss_end = 65;
                let prograss_end1 = 75;
                let prograss_end2 = 25;
                let speed = 20;
                let progress = document.querySelector('.circul');
                let val = document.querySelector('.value-container');

                let progress1 = document.querySelector('.circul1');
                let val1 = document.querySelector('.value-container1');

                let progress2 = document.querySelector('.circul2');
                let val2 = document.querySelector('.value-container2');

                
                let pro = setInterval(()=>{
                    prograss_value++;
                    val.textContent = `${prograss_value} %`;
                    progress.style.background = `conic-gradient(
                        #2c97d8 ${prograss_value * 3.6}deg,
                        #cadcff ${prograss_value * 3.6}deg
                    )`
                    if (prograss_value==prograss_end){
                        clearInterval(pro);
                        
                    }
                },speed)

                let pro1 = setInterval(()=>{
                    prograss_value1++;
                    val1.textContent = `${prograss_value1} %`;
                    progress1.style.background = `conic-gradient(
                        orange ${prograss_value1 * 3.6}deg,
                        #ffff88 ${prograss_value1 * 3.6}deg
                    )`
                    if (prograss_value1==prograss_end1){
                        clearInterval(pro1);
                        
                    }
                },speed)

                let pro2 = setInterval(()=>{
                    prograss_value2++;
                    val2.textContent = `${prograss_value2} %`;
                    progress2.style.background = `conic-gradient(
                        green ${prograss_value2 * 3.6}deg,
                        lightgreen ${prograss_value2 * 3.6}deg
                    )`
                    if (prograss_value2==prograss_end2){
                        clearInterval(pro2);
                        
                    }
                },speed)
        </script>

    
</body>
</html>