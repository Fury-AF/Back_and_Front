import DataService from "../Model/DataService.js";
import TableView from "../View/Tabel/TableView.js";

export default class Controller {
  constructor() {
    this.dataService = new DataService();
    this.dataService.getData("investment", this.megjelenit);
    $(window).on("deleteLine", (e) => {

    
      console.log("Controller-", e);
      this.dataService.deleteData("investment", e.detail, this.errorCallback);
    
    });
  }  errorCallback(error) {
    console.log(error);
    //peldányosíthatom a hibaCallback osztályt
  }

  megjelenit(list) {
    // console.log("Controller: ", list);
    new TableView(list, $(".data"));
  }
}
