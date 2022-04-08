import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class PostService {

  private _postUrl = 'http://localhost:8000/api/posts'
  constructor(private httpClient:HttpClient) { }

  getPosts(id:Number){

    return this.httpClient.get('http://127.0.0.1:8000/api/posts/user_friend/'+id);
  }

  postFeed(data:any){
    return this.httpClient.post(this._postUrl,data);
  }
}
