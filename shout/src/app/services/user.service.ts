import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'
@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private httpClient:HttpClient) { }

  getUsers(){
    return this.httpClient.get('http://localhost:8000/api/users');
  }

  registerUser(data:any){
    return this.httpClient.post('http://localhost:8000/api/users', data);
  }
}
