import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { User } from 'src/app/models/user';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {
  user = new User();
  constructor(private userService: UserService) { }

  ngOnInit(): void {
  }
  register(userForm: NgForm){
    this.user.name = userForm.value.name;
    this.user.email = userForm.value.email;
    this.user.dob = userForm.value.dob;
    this.user.password = userForm.value.password;
    this.user.gender = userForm.value.gender;
    this.user.city = userForm.value.city;
    this.user.phone = userForm.value.phone;
    this.userService.registerUser(this.user).subscribe(res => {
      console.log(res);
    })

    console.log(this.user);
  }

}
