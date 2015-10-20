function mensagemHoraData(){
var d = new Date();
var n = d.getDay();
var h = d.getHours();

switch(n){

    case 0:
        n = "Hoje é domingo.";
        break;   
    case 1:
        n = "Hoje é segunda-feira.";
        break;
    case 2:
        n = "Hoje é terça-feira.";
        break;
    case 3:
        n = "Hoje é quarta-feira.";
        break;
    case 4:
        n = "Hoje é quinta-feira.";
        break;
    case 5:
        n = "Hoje é sexta-feira.";
        break;
    case 6:
        n = "Hoje é sábado.";
        break;  
}
	if(h < 6) {
		h="Boa noite!";
	}else if(h < 12) {
		h="Bom dia!";
	}else if(h < 18) {
		h="Boa tarde!";
	}else {
		h="Boa noite!";
	}
alert(h+" "+n);
}