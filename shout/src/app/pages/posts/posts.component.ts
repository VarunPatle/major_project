import { Component, OnInit } from '@angular/core';
import { PostService } from 'src/app/services/post.service';

@Component({
  selector: 'app-posts',
  templateUrl: './posts.component.html',
  styleUrls: ['./posts.component.scss']
})
export class PostsComponent implements OnInit {
  posts: any;
  userId:any;
  imagePath='http://127.0.0.1:8000/public/images/';
  counter = 0;
  constructor(private postService: PostService) { }

  ngOnInit(): void {
    var user = JSON.parse(sessionStorage.user);
    this.userId = user.id;
    this.postService.getPosts(this.userId).subscribe(res =>{
      this.posts = res;
      console.log(this.posts);

    })
  }
  increamentCounter(){
    this.counter++;
    }
  }



