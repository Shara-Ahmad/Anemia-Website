function getBotResponse(input){
    if(input == "Hello"){
        return "Hello there!"+"How can I help You";
    }else if(input=="Bye"){
        return "Bye, Talk to you later!"
    }
   
     else if(input=="Information on anemia"){
      return "Anemia is a condition in which you lack enough healthy red blood cells to carry adequate oxygen to your body's tissues. Having anemia, also referred to as low hemoglobin, can make you feel tired and weak. There are many forms of anemia, each with its own cause.";
     }else if(input=="Thank you"){
        return "Okay!";
    }else if(input=="Soniya"){
        return "Hey soniya! Welcome";
    }else if(input=="Rishabh"){
        return "Hey Rishabh! Welcome";
    
   }else if(input=="Hey"){
      return " Do you have any doubt"
      
}else if(input=="No"){
    return "ok";
}else if(input=="What are symptoms of anemia"){
    return "Fatigue,Weakness,Pale or yellowish skin,Irregular heartbeats,Shortness of breath,Dizziness or lightheadedness,Chest pain,Cold hands and feet.";
}else if(input=="What foods to avoid if you are anemic"){
    return "Some foods can make it harder for your body to absorb iron. These include coffee, tea, milk, egg whites, fiber, and soy protein. Try to avoid these foods if you have iron deficiency anemia";
}
else if(input=="What can I do to control my anemia"){
    return "Taking iron supplement pills and getting enough iron in your food will correct most cases of iron deficiency anemia.";
}else{
return "Try something else";
}

}