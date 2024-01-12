import HeaderView from "./HeaderView.js";
import LineView from "./LineView.js";

export default class TableView {
  #list = [];
  constructor(list, parentItem) {
    // console.log("TableView: ",list);
    this.#list = list;

    parentItem.append(`<table class='table table-striped'>
            <thead ></thead>
            <tbody></tbody>
            </table>`);
    this.tbodyItem = parentItem.find("tbody");
    this.theadItem = parentItem.find("thead");
    // console.log("TableView: ",this.theadItem);


    new HeaderView(list, this.theadItem);
    this.displayLine();
  }

  displayLine() {
    this.#list.forEach((elem, index) => {
      new LineView(index, elem, this.tbodyItem);
    });
  }
  
}
