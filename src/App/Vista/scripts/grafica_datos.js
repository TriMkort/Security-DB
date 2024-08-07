var ctx= document.getElementById("Grafica Estudiantil").getContext("2d");
                
var myChart= new Chart(ctx,{
    type:"bar",
    data:{
        labels:['Entrada','Salida','Retardos'],
        datasets:[{
                label:'', 
                data:[3, 6, 1], //cambiar para modificacion de grafica
                backgroundColor:[
                    'rgb(255, 138, 101)',
                    'rgb(144, 164, 174)',
                    'rgb(129, 199, 132)'
                ]
        }
    ]
    },
    options:{
        scales:{
            yAxes:[{
                    ticks:{
                        beginAtZero:true
                    }
            }]
        }
    }
});