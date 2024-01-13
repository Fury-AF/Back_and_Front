export default class LineView {
  #obj = {};
  constructor(index, obj, parentItem) {
    //console.log("LineView:", index);

    this.#obj =obj;
    this.parentItem = parentItem;
    this.index = index;

   // console.log("LineView-parentItem: ", index, this.#obj);
    this.htmlBuilder();

    this.deleteItem = this.parentItem.find(".torles:last");
    this.deleteItem.on("click", () => {
     // console.log("LineView-törles");
      this.trigger("deleteLine");
    });
  }

  trigger(e) {
    const esemeny = new CustomEvent(e, { detail: this.#obj.id });
    window.dispatchEvent(esemeny);
   console.log("LineView :",esemeny,this.#obj.id )
  }
  htmlBuilder() {
    let txt = "<tr>";
    for (const key in this.#obj) {
      txt += `<td>${this.#obj[key]}</td>`;
    }
    txt += `<td><button class="torles">X </button></td> `;
    txt += "</tr>";
   // console.log(txt);
    this.parentItem.append(txt);
  }
}
