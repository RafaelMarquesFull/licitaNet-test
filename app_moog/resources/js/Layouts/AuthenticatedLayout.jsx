
import AdminNav from '@/Pages/Panel/Partials/AdminNav'
import SideBar from '@/Pages/Panel/Partials/SideBar';

export default function Authenticated({children }) {

    return (
        <div className="h-full dark:bg-black">
           
            <AdminNav/>
            <div className=" flex w-full">
                <SideBar/>
                <main className='w-full  box-border shadow-md ' style={{ overflow: 'auto', height: '100vh', paddingTop: '35px', paddingBottom:'100px' }}>
                    {children}
                </main>
            </div>
        </div>
    );
}
