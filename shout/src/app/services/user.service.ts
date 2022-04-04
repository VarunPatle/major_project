import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class UserService {

  private _loginUrl = 'http://localhost:8000/api/login'
  private _registerUrl = 'http://localhost:8000/api/register'
  constructor(private httpClient:HttpClient) { }

  // getUsers(){
  //   return this.httpClient.get('http://localhost:8000/api/users');
  // }

  registerUser(data:any){
    return this.httpClient.post(this._registerUrl, data);
  }

  login(data:any){
    return this.httpClient.post<any>(this._loginUrl, data);
  }


}
