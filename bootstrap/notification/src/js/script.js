// 'use strict';
// // import vika from '../img/vika.png'
// if('Notification' in window){
//    const showNotif=()=>{
//         let title='comrade Vika need you!!'
//         let body=`serve to the motherland!!! \n comrade ${localStorage.getItem('player')}\n war event ended 3 day left `
//         let icon='src/img/vika.png'
//         let noti=new Notification(title,{
//             body,icon
//         })
//         noti.onclick=((e)=>{
//             window.location.href='https://initer3737.github.io'
//         })
//         noti.close()
//    }
//         if(Notification.permission === 'granted'){
//             showNotif()
//         }else if(Notification.permission !== 'denied'){
//                 Notification.requestPermission().then((perm)=>{
//                     if(perm === 'granted'){
//                         showNotif();
//                     }
//                 })
//         }
// }


// localStorage.setItem('player','yotsusan')

// window.addEventListener("beforeinstallprompt", (e) => {
//   // log the platforms provided as options in an install prompt
//   console.log(e.platforms); // e.g., ["web", "android", "windows"]
//   e.userChoice.then((choiceResult) => {
//     console.log(choiceResult.outcome); // either "accepted" or "dismissed"
//   }, handleError);
// });

if('serviceWorker' in navigator){
    navigator.serviceWorker.register('./sw.js')
    .then((e)=>{
        console.log('worker is registered :',e)
    })
    .catch(e=>console.log('eror is here comrade guest :',e))
}