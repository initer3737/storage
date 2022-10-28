const playSelect=(index='')=>{
    let audio=new Audio(`${index}../../vanila/porto/sound/select.mp3`)
    return audio.play()
}
const playActive=(index='')=>{
    let audio=new Audio(`${index}../../vanila/porto/sound/clickselek.mp3`)
    return audio.play()
}

const youtubeRedirect=()=>window.location.href=href="https://www.youtube.com/channel/UClsfa0LkA3_YMsFjW1M__sw";
const instagramRedirect=()=>window.open("https://www.instagram.com/yotsusan_machi",'_blank');

const audioplay=url=>{
        const music=new Audio(url)
            music.loop=true
            music.play();
}
const toTop=()=>window.scrollTo(0,0);
