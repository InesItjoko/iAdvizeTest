var NB_ANIMAUX_PAGE=1;
var DERNIERE_PAGE=Math.ceil(ROW_COUNT/NB_ANIMAUX_PAGE);
console.log('Nombre Animaux par page :'+NB_ANIMAUX_PAGE);
console.log('Derniere page :'+DERNIERE_PAGE);
console.log('Row_count :'+ROW_COUNT);


selection=0; //correspond à la page actuelle
tab_img= new Array;

function detach(){
	//On supprime les éléments sur la page actuelle
	((selection+1)==DERNIERE_PAGE)? depart=tab_img.length-1:depart=NB_ANIMAUX_PAGE*(1+selection)-1;
	for(index=depart;index>=NB_ANIMAUX_PAGE*selection;index--){
		tab_img[index].detach();
	}
}

function attach(){
	//On attache les éléments sur la nouvelle page
	((selection+1)==DERNIERE_PAGE)? depart=tab_img.length-1:depart=NB_ANIMAUX_PAGE*(1+selection)-1;
	for(index=depart;index>=NB_ANIMAUX_PAGE*selection;index--){
		$("#caroussel").prepend(tab_img[index]);
	}

}

function next(){
	//On supprime les éléments sur la page actuelle
	detach();

	//On passe à la page suivante. On boucle le catalogue si on arrive à la fin
	selection++;
	if(selection>=DERNIERE_PAGE) selection=0;

	attach();
}

function previous(){
	//On supprime les éléments sur la page actuelle
	detach();	
	
	//On passe à la page précédente. On boucle le catalogue si on arrive au début
	selection--;
	if(selection<0) selection=DERNIERE_PAGE-1;

	attach();
}

function rafraichirPage(){

	$(".caroussel").each(function(){
		
		var index = $(this).attr("id");
		if(index>=NB_ANIMAUX_PAGE){
			tab_img[index].detach();
		}
	});


}

$(document).ready(function(){

	//Quand la construction du DOM est terminée, on cache certains éléments pour créer le caroussel
	$(".caroussel").each(function(){

		var index = $(this).attr("id");
		//On sauvegarde tous les animaux de la catégorie dans un tableau.
		tab_img[index]=$(this);
		//On affiche la première page avec NB_ANIMAUX_PAGE animaux										
		if(index>=NB_ANIMAUX_PAGE){
			tab_img[index].detach();
		}
	});

	$("#suivant>img").click(next);
	$("#precedant>img").click(previous);

});


