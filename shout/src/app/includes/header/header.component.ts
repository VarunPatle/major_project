import { Component, OnInit , AfterViewInit } from '@angular/core';
import { share } from 'rxjs';
import { SharedService } from 'src/app/services/shared.service';
import { UserService } from 'src/app/services/user.service';


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  isLoggedin: boolean;
  constructor(private sharedService: SharedService) {

   }

  ngOnInit(): void {

  }

  ngAfterViewInit(): void{
    this.isLoggedin = this.sharedService.getValue();
    console.log("this is from header ", this.isLoggedin);
  }




}
