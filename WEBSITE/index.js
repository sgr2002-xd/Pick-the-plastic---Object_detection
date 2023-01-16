const dims = window
var navOpen;
if(window.innerWidth <= 992){
    var navOpen = false
}else{
    navOpen = true
}

var showCloseBtn = false

var sideBarMinWidth = "100px"
var sideBarWidth = "250px"
var closeBtn = document.getElementsByClassName("closeBtn")[0]

function onMenu(){
    var topbarNav = document.getElementsByClassName("main")[0]
    if(window.innerWidth <= 700){
        closeBtn.style.setProperty("display", "block", "important");
    }
    if(navOpen){
        topbarNav.style.marginLeft = sideBarMinWidth
        navOpen = false
        closeNav()
    }else{
        topbarNav.style.marginLeft = sideBarWidth
        navOpen = true
        openNav()
    }
}

function closeNav(){
    var sidebar = document.getElementsByClassName("sidebar")[0];
    var logoImg = document.getElementsByClassName("logo-img")[0];
    var navLinks = document.getElementsByClassName("nav-links")[0];
    var navLink = document.getElementsByClassName("nav-link");

    if(window.innerWidth <= 700){
        sidebar.style.width = "0";
        closeBtn.style.setProperty("display", "none", "important");
        return;
    }

    sidebar.style.width = sideBarMinWidth;
    logoImg.style.display = "none";
    // navLinks.style.marginTop = "280px"

    navLink = [...navLink]
    navLink.forEach(nl => {
        nl.style.justifyContent = "center";
        nl.children[1].style.display = "none";
        nl.children[0].style.marginRight = 0;
    })
}

function openNav(){
    var sidebar = document.getElementsByClassName("sidebar")[0];
    var logoImg = document.getElementsByClassName("logo-img")[0];
    var navLinks = document.getElementsByClassName("nav-links")[0];
    var navLink = document.getElementsByClassName("nav-link");

    sidebar.style.width = sideBarWidth;
    logoImg.style.display = "block";
    navLinks.style.marginTop = "30px"

    navLink = [...navLink]
    navLink.forEach(nl => {
        nl.style.setProperty("justify-content", "start", "important");
        nl.children[1].style.setProperty("display", "block", "important");
        nl.children[0].style.setProperty("margin-right", "20px", "important");
    })
}


// var dc = document.getElementsByClassName("days-content")[0]
// dc.scrollLeft = 10000


var sideMenuItems = document.getElementsByClassName("sideMenu__item");
sideMenuItems = [...sideMenuItems]
sideMenuItems.forEach((mi)=>{
    mi.addEventListener("click", function(e){
        sideMenuItems.forEach((mi)=>{
            mi.classList.remove('active')
        })
        e.target.classList.add("active")

        var itemName = e.target.innerText.toLowerCase()
        if(itemName == "edit profile"){
            document.getElementsByClassName("settings__basic")[0].scrollIntoView(false)
        }else if(itemName == "referral"){
            document.getElementsByClassName("settings__referral")[0].scrollIntoView(false)
        }else if(itemName == "social media"){
            document.getElementsByClassName("settings__social")[0].scrollIntoView(false)
        }
    })
})

var base = window.location
var topMenuItems = document.getElementsByClassName("course__item");
topMenuItems = [...topMenuItems]
topMenuItems.forEach((mi)=>{
    mi.addEventListener("click", function(e){
        $.ajax({
            url: base['origin'] + "/lib/api/programs/program.php",
            method: 'POST',
            data: {state: e.currentTarget.id},
            success: function(res){
                window.location.href = "/class.php"
            },
        })
    })
})

function loadClassVideo(username, id){
    $.ajax({
        url: base['origin'] + "/lib/drm.php?username="+username+"&token=" + id,
        method: 'GET',
        success: function(res) {
            var data = JSON.parse(res);
            const video_ = new VdoPlayer({
                otp: data['otp'],
                playbackInfo: data['playbackInfo'],
                theme: "9ae8bbe8dd964ddc9bdb932cca1cb59a",
                container: document.querySelector("#embedBox"),
            });
            video_.addEventListener('load', () => {
                video_.availablePlaybackRates = [0.75, 1.0, 1.25, 1.5, 1.75, 2.0]
            });
        },
    })
}