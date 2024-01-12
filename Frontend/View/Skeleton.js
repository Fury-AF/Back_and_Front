export const Skeleton = {
  VezetekNev: {
    megjelen: "Vezeték Név",
    tipus: "text",
    palceholder: "Valaki Vagyok",
    paettern: "[A-z][a-z]{3}",
    value:"",
    szoveg: "Legalább 3 betű, a névnek nagybetűvel kell kezdődnie",
    required: true,
  },
  KeresztNev: {
    megjelen: "Kereszt Név",
    tipus: "text",
    palceholder: "Valaki Vagyok",
    paettern: "[A-z][a-z]{3}",
    value:"",
    szoveg: "Legalább 3 betű, a névnek nagybetűvel kell kezdődnie",
    required: true,
  },
szul:{
    megjelen:"Születési idő",
    tipus:"number",
    id:"szul_ev" ,
    value:"2000",
    paettern: {min:"1000",max:"2023"},
    placeholder:"valaki vagyok",
    szoveg: "da",
    required: false,
}
};
