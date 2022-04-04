import { EventEmitter, Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class SharedService {
  isLoggedin = false;
  constructor() { }

  setValue(data:any){
    this.isLoggedin = data;
  }
  getValue(){
    return this.isLoggedin;
  }

}
