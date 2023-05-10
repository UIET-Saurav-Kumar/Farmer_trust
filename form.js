const firebaseConfig = {
    apiKey: "AIzaSyAZUXwbIZ6EKJsLOhavPCZfSEoekFfuGWI",
    authDomain: "saurav-bef96.firebaseapp.com",
    databaseURL: "https://saurav-bef96-default-rtdb.firebaseio.com",
    projectId: "saurav-bef96",
    storageBucket: "saurav-bef96.appspot.com",
    messagingSenderId: "917746622495",
    appId: "1:917746622495:web:0e989f3f32f5bbdc30f52a",
    measurementId: "G-BRZ2LN5HV9"
  };


  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig); 



var formdataDB = firebase.database().ref("saurav");
document.getElementById("saurav").addEventListener("submit" , submitForm);

function submitForm(e) {
  e.preventDefault();

  var name = getElementVal("name");
  var number = getElementVal("number");
  var mail = getElementVal("mail");
  var city = getElementVal("city");
  var dist = getElementVal("dist");
  var message = getElementVal("message");

    saveMessages(name , number, mail , city, dist, message);

    document.querySelector(".alert").style.display = "block";

     setTimeout(()=>{
    document.querySelector(".alert").style.display = "none";
    },2000);

    document.getElementById("form").reset();

};

    const saveMessages = (name , number, mail , city, dist, message)=>
    {
      var newformdata = formdataDB.push();

      newformdata.set({
        name : name,
        number: number,
         mail: mail,
          city: city,
          dist: dist,
          message : message
      });
    };



const getElementVal = (id) => {
  return document.getElementById(id).value;
  };




