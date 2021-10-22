class App extends React.Component {
    constructor(props) {
        super(props)
    }


    render() {
     
        return (

<div className="login-wrap">
  
        <div className="login-html">
          <input id="tab-1" type="radio" name="tab" className="sign-in" defaultChecked />
          <label htmlFor="tab-1" className="tab">CONNEXION</label>
          <input id="tab-2" type="radio" name="tab" className="sign-up" />
          <label htmlFor="tab-2" className="tab">INSCRIPTION</label>



          
          <div className="login-form">
            <form className="sign-in-htm" action="./api/Users/login.php" method="POST">
              <div className="group">
                <input id="username" name="username" type="text" className="input" placeholder="Nom d'utilisateur"/>
              </div>
              <div className="group">
                <input id="password" name="password" type="password" className="input" data-type="password" placeholder="Mot de passe" />
              </div>
              <div className="group">
               <input type="submit" name="submit" className="button" defaultValue="Connexion" />
              </div>
              <div className="hr" />
              
            </form>
            <form className="sign-up-htm" action="./api/Users/signup.php" method="POST">
              <div className="group">
                <input id="username" name="username" type="text" className="input" placeholder="Nom d'utilisateur"/>
              </div>
              <div className="group">
                <input id="email" name="email" type="text" className="input" placeholder="Email" />
              </div>
              <div className="group">
                <input id="password" name="password" type="password" className="input" data-type="password" placeholder="Mot de passe" />
              </div>
              <div className="group">
                <input id="pass" type="password" className="input" data-type="password" placeholder="Confirmer mot de passe" />
              </div>
           
              <div className="group">
            
              <input type="submit" name="submit" className="button" defaultValue="Créer votre compte" />
            
              </div>
             

             
            </form>
          </div>
        </div>
      </div>
         
         


        )
    }
}