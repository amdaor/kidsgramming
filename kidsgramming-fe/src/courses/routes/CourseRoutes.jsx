import { Navigate, Route, Routes } from 'react-router-dom'
import { CourseOfferingPage } from '../pages/CourseOfferingPage'

export const CourseRoutes = () => {
  return (
    <Routes>
        <Route path='offering' element={<CourseOfferingPage />} />
        <Route path='/*' element={<Navigate to='/' />} />
    </Routes>
  )
}
