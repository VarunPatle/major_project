import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { PostService } from 'src/app/services/post.service';
import { UserService } from 'src/app/services/user.service';



@Component({
  selector: 'app-feed',
  templateUrl: './feed.component.html',
  styleUrls: ['./feed.component.scss']
})
export class FeedComponent implements OnInit {
  postsForm: FormGroup;
  image:any;
  id: any;
  description: any;
  res: any;
  imagePath = 'http://127.0.0.1:8000/public/images/';
  shortLink: string = "";
  loading: boolean = false; // Flag variable
  file: File;

  constructor(private postService: PostService, private userService: UserService, private formBuilder: FormBuilder) {
    this.postsForm = formBuilder.group({
      description: new FormControl(),
      image: new FormControl(),


    })
  }

  ngOnInit(): void {
    var user = JSON.parse(sessionStorage.user);
    this.id = user.id;
  }
//   // addPost() {
//   //   const data = {
//   //     user_id: this.id,
//   //     image: this.image,
//   //     description: this.description
//   //   }
//   //   console.log(data)
//   //   this.postService.postFeed(data).subscribe(res => {
//   //        console.log(res);
//   //     // alert("user registered..")

//   //   })
//   // }
//   // onChange(event:any) {
//   //   this.file = event.target.files[0];
// //}
// onUpload() {
//   this.loading = !this.loading;
//   const data = {
//         user_id: this.id,
//         image: this.image,
//         description: this.description
//       }
//   console.log(data);
//   this.postService.postFeed(data).subscribe(res => {
//        console.log(res);
//   });

// }
// onFileChange(event: any) {
//     //console.log(event)
//    //this.image=event.target.files[0];
//     const reader = new FileReader();
//     if (event.target.files && event.target.files.length) {
//     const [file] = event.target.files;
//           reader.readAsDataURL(file);
//           reader.onload = () => {
//           this.imagePath = reader.result as string;
//           this.postsForm.patchValue({

//           fileSource: reader.result

//         });
// };
// }
// }
}


