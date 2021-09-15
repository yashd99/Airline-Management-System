// For Firebase JS SDK v7.20.0 and later, measurementId is optional
import firebase from "firebase";

const firebaseConfig = {
    apiKey: "AIzaSyC-pc9IEmFHdkogtem7erCW49pgO8PlTGQ",
    authDomain: "challenge-890c6.firebaseapp.com",
    databaseURL: "https://challenge-890c6.firebaseio.com",
    projectId: "challenge-890c6",
    storageBucket: "challenge-890c6.appspot.com",
    messagingSenderId: "651293240089",
    appId: "1:651293240089:web:20d51908e694d2377f3388",
    measurementId: "G-HJ92ZQ3SET"
  };
const firebaseApp = firebase.initializeApp(firebaseConfig);
const db=firebaseApp.firestore();
const auth =firebase.auth();
export {db,auth};