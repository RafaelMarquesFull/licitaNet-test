
"use client";

import ResponsiveNavLink from "@/Components/ResponsiveNavLink";
import { Sidebar } from "flowbite-react";
import {
  HiArrowSmRight,
  HiChartPie,
  HiInbox,
  HiCollection,
  HiBookmark,
  HiShoppingBag,
  HiUser,
} from "react-icons/hi";


function SideBar() {
  return (
    <div className=" min-h-screen shadow-sm py-0.5">
      <Sidebar aria-label="Sidebar with multi-level dropdown">
        <Sidebar.Items>
          <Sidebar.ItemGroup>
            <Sidebar.Item href={route('dashboard')} icon={HiChartPie}> Dashboard </Sidebar.Item>
            <Sidebar.Item href={route('products')} icon={HiShoppingBag}> Produtos </Sidebar.Item>
            <Sidebar.Item href={route('categories')} icon={HiCollection}> Categorias </Sidebar.Item>
            <Sidebar.Item href={route('brands')} icon={HiBookmark}> Marcas </Sidebar.Item>
            <Sidebar.Item href={route('clientes')} icon={HiUser}> Clientes </Sidebar.Item>
            <Sidebar.Item icon={HiArrowSmRight}> <ResponsiveNavLink method="post" href={route('logout')} className="block px-0  ps-0 py-0 whitespace-nowrap border-l-0 m-0 hover:bg-transparent text-gray-800 dark:text-white"> Sair </ResponsiveNavLink> </Sidebar.Item>
          </Sidebar.ItemGroup>
        </Sidebar.Items>
      </Sidebar>

    </div>
  );
}
export default SideBar