
"use client";

import { Button } from "flowbite-react";
import { HiOutlineShoppingCart } from "react-icons/hi";

export default function ButtonAddTocart() {
  return (
    <div className="flex flex-wrap h-9 w-15 shadow-md align-content-center justify-center bg-amber-500 rounded hover:bg-amber-200">
      <Button>
        <HiOutlineShoppingCart className="h-5 w-8 " />
      </Button>
     
    </div>
  );
}
