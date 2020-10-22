function activate(option){

    let name = option.id;
    if(name === 'one1'){
    document.getElementById('one').style.display = 'block';
    document.getElementById('two').style.display = 'none';
    document.getElementById('three').style.display = 'none';
    document.getElementById('four').style.display = 'none';


   
    }
    else if(name === 'two2'){
    document.getElementById('one').style.display = 'none';
    document.getElementById('two').style.display = 'block';
    document.getElementById('three').style.display = 'none';
    document.getElementById('four').style.display = 'none';

    }
    else if(name === 'three3'){
        document.getElementById('one').style.display = 'none';
        document.getElementById('two').style.display = 'none';
        document.getElementById('three').style.display = 'block';
        document.getElementById('four').style.display = 'none';

        }
    else{
         document.getElementById('one').style.display = 'none';
         document.getElementById('two').style.display = 'none';
         document.getElementById('three').style.display = 'none';
         document.getElementById('four').style.display = 'block';

     }


   
         
}
