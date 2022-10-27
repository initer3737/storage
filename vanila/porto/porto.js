const playSelect=()=>{
    let audio=new Audio('sound/select.mp3')
    return audio.play()
}
const playActive=()=>{
    let audio=new Audio('sound/clickselek.mp3')
    return audio.play()
}

const youtubeRedirect=()=>window.location.href=href="https://www.youtube.com/channel/UClsfa0LkA3_YMsFjW1M__sw";
const instagramRedirect=()=>window.open("https://www.instagram.com/yotsusan_machi",'_blank');

const toTop=()=>window.scrollTo(0,0);
