export default class HeaderView {
  #obj = {};
  constructor(obj, parentItem) {
//    console.log("HeaderView: ", obj);
    this.#obj = obj;

    this.parentItem = parentItem;
    this.htmlBuilder();
  }

  
  htmlBuilder() {
    let txt = "<tr>";
    for (const key in this.#obj) {
      txt += `<th>${this.#obj[key]}</th>`;
    }

    txt += "</tr>";
    //console.log("HeaderView-htmlContent: ",txt);
    this.parentItem.append(txt);
  }
}
