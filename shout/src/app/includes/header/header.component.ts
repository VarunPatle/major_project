import { Component, OnInit } from '@angular/core';
import { share } from 'rxjs';
import { SharedService } from 'src/app/services/shared.service';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  isLoggedin: boolean = false;
  constructor(private sharedService: SharedService) {

   }

  ngOnInit(): void {
    this.isLoggedin = this.sharedService.getValue();
    console.log(this.isLoggedin);
  }




}
