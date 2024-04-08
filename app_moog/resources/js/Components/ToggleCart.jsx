import React from 'react';
import Cart from './Cart';
import { ShoppingBagIcon } from '@heroicons/react/24/outline';

 
// Componente de botão
class ButtonCart extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      cartClicked: false
    };
  }

  handleClick = (condition) => {
    this.setState({ cartClicked: condition });
  }

  render() {
    // Se o botão foi clicado, renderiza o componente Cart
    if (this.state.cartClicked) {
      return <Cart handleClick={this.handleClick}/>;
    }

    // Caso contrário, renderiza o botão
    return (
      <button  onClick={()=>this.handleClick(true)} className='dark:text-white dark:hover:text-amber-500'>
        <ShoppingBagIcon className="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 dark:text-white dark:hover:text-amber-500" 
        aria-hidden="true"/>
      </button>
    );
  }
}


export default ButtonCart;
