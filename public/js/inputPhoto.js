 document.getElementById('typeOffre').onchange = function ()
                    {
                        var input = document.getElementById('inputVE');
                        var typeOffre = document.getElementById('typeOffre');
                         var choix = document.getElementById('venteEchange');
                         input.style.display = 'initial' ;

                         if (typeOffre.value == "بيع") choix.innerHTML = " سعر البيع ( دج )";
                         else choix.innerHTML = "مدة التبادل ( يوم )";
                    }
                    var cpt = 1 ;

                   document.getElementById('photoPlus').onclick = function ()
                    {
                        var p2 = document.getElementById('photo2');
                        var p3 = document.getElementById('photo3');
                        var p4 = document.getElementById('photo4');
                        var p5 = document.getElementById('photo5');
                        var plus = document.getElementById('photoPlus');

                        cpt++;
                        switch(cpt)
                        {
                            case(2) : p2.style.display = 'flex';break;
                            case(3) : p3.style.display = 'flex';break;
                            case(4) : p4.style.display = 'flex';break;
                            case(5) : p5.style.display = 'flex';
                                        plus.innerHTML = '-';
                                        break; 
                            case(6) : p5.style.display = 'none';break;
                            case(7) : p4.style.display = 'none';break;
                            case(8) : p3.style.display = 'none';break;
                            case(9) : p2.style.display = 'none';
                                        plus.innerHTML = '+';
                                        cpt = 1 ; 
                                        break;

                        }
                        
                           
                    }

					 document.getElementById('p1').onchange = function ()
					  {
							 f = this.value ;
							 f = f.replace(/.*[\/\\]/, '');
 							 document.getElementById('photo1').innerHTML = f ;
					  };
					  document.getElementById('p2').onchange = function ()
					  {
							 f = this.value ;
							 f = f.replace(/.*[\/\\]/, '');
 							 document.getElementById('photo2').innerHTML = f ;
					  };
					  document.getElementById('p3').onchange = function ()
					  {
							 f = this.value ;
							 f = f.replace(/.*[\/\\]/, '');
 							 document.getElementById('photo3').innerHTML = f ;
					  };
					  document.getElementById('p4').onchange = function ()
					  {
							 f = this.value ;
							 f = f.replace(/.*[\/\\]/, '');
 							 document.getElementById('photo4').innerHTML = f ;
					  };
					  document.getElementById('p5').onchange = function ()
					  {
							 f = this.value ;
							 f = f.replace(/.*[\/\\]/, '');
 							 document.getElementById('photo5').innerHTML = f ;
					  };

				 