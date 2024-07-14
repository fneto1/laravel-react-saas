import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import React from 'react'
import { Head, Link, usePage } from '@inertiajs/react';
import CreditPricingCards from '@/Components/CreditPricingCards';

const Index = ({auth, packages, features, success, error}) => {
    const availableCredits = auth.user.available_credits;
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={
            <h2 className='font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight'>
                Your credits
            </h2>
        }
    >
        <Head title='Your credits' />

        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {success &&
                    <div className="rounded-lg bg-emerald-500 text-gray-100 p-3 mb-4">
                        {success}
                    </div>
                }
                {error &&
                    <div className="rounded-lg bg-red-500 text-gray-100 p-3 mb-4">
                        {error}
                    </div>
                }

                <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                    <div className="flex flex-col gap-3 items-center p-4">
                        <img src="/img/coin.png" alt="" className='w-[100px] h-[100px]' />
                        <h3 className='text-white text-2xl'>
                            You have {availableCredits} credits.
                        </h3>
                    </div>
                </div>
                <CreditPricingCards packages={packages.data} features={features.data}/>
            </div>
        </div>

    </AuthenticatedLayout>
  )
}

export default Index
