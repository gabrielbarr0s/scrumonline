<?php
include "config.php";
?>
<!-- Introduction -->
<div class="row">
  <article class="col-xs-12 col-lg-10 col-lg-offset-1">
    <h2>Planning Cards Online</h2>
    <p>Welcome to the open source Planning Cards Online app.</p>
	<p>The use of this app is free of charge for everyone. As a Scrum Master just start a named session and invite your team to join you.</p>
	<p>It is recommended to display the scrum master view at <b>https://planningcards.online/</b> with a big screen (TV or projector) and let everyone else join via the smartphone app.</p>
	<p>To join a session just enter the session number displayed in the heading of the Scrum Master view</p>
  </article>
</div>
            
<div class="row">
  <h2 class="col-xs-12 col-lg-10 col-lg-offset-1">Create or Join a Session</h2>
  
  <!-- Join session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5" ng-controller="JoinController as join">
    <div class="panel panel-default">
      <div class="panel-heading">Join</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" ng-class="{'has-error': join.idError}">
            <label>Session Number:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="join.id" ng-change="join.passwordCheck()" placeholder="1234">
              <span ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-class="{'has-error': join.nameError}">
            <label>Your Name:</label>
            <div class="has-feedback" ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  ng-model="join.name" placeholder="John">
              <span ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-if="join.requiresPassword">
            <label>Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control"  ng-model="join.password">
              <span ng-if="join.passwordError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Join" ng-click="join.joinSession()">
       </form>
      </div>
    </div>        
  </div>
  
  <!-- Create session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1" ng-controller="CreateController as create">
    <div class="panel panel-default">
      <div class="panel-heading">Create</div>
      <div class="panel-body">  
        <form role="form">
          <div class="form-group" ng-class="{'has-error': create.nameError}">
            <label for="sessionName">Session Name:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="create.name" placeholder="My session">
              <span ng-if="create.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group">
            <label>Cards:</label>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span ng-bind-html="create.selectedSet.value"></span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li ng-repeat="set in create.cardSets" ng-class="{'active': set == create.selectedSet}">
                  <a class="selectable" ng-click="create.selectedSet = set" ng-bind-html="set.value"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <label><input type="checkbox" ng-model="create.isPrivate"> Password</label> 
          </div>
          <div class="form-group" ng-if="create.isPrivate" ng-class="{'has-error': create.pwdError}">
            <label for="password">Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control" ng-model="create.password">
              <span ng-if="create.pwdError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Create" ng-click="create.createSession()">
        </form>
      </div>
    </div>        
  </div>
  
</div>
