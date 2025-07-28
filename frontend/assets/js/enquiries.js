document
  .querySelector('#enquiryForm')
  .addEventListener('submit', async function (e) {
    e.preventDefault()
    const formData = new FormData(this)

    try {
      const response = await fetch('core/backend/submit_enquiry.php', {
        method: 'POST',
        body: formData,
      })

      if (response.ok) {
        const result = await response.json()
        if (result.success) {
          alert('Enquiry submitted successfully!')
          this.reset() // Reset the form
        } else {
          alert('Error: ' + result.message)
        }
      } else {
        alert('Network error, please try again later.')
      }
    } catch (error) {
      console.error('Error submitting form:', error)
      alert('An unexpected error occurred. Please try again.')
    }
  })
