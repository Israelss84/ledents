// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyBHFJHClFfWOwkX-j9skI5pWetItQhibXQ",
    authDomain: "clinicaledents-22f25.firebaseapp.com",
    projectId: "clinicaledents-22f25",
    storageBucket: "clinicaledents-22f25.appspot.com",
    messagingSenderId: "549732506902",
    appId: "1:549732506902:web:cc7879455c6920e2428437"

};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const db =  firebase.firestore();



var f = new Date();
var fecha = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
var hora = f.getHours() + ':' +f.getMinutes();
const navegador = navigator.userAgent;
const pagina = filename();

function filename(){
    var rutaAbsoluta = self.location.href;   
    var posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/");
    var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );
    return rutaRelativa;  
}
function getIP(json) {
    
    var ip = json.ip;
    db.collection('vistas').doc().set({
        fecha,
        hora,
        navegador,
        pagina,
        ip
    });
    
}

